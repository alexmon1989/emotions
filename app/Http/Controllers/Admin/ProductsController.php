<?php namespace Emotions\Http\Controllers\Admin;

use Emotions\Http\Requests;

use Emotions\Product;
use Emotions\ProductImage;
use Emotions\ProductType;
use Illuminate\Http\Request;
use Emotions\Http\Requests\StoreProductsRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class ProductsController extends AdminController {

    // Расположение картинок
    protected $thumbDest;

    public function __construct()
    {
        parent::__construct();
        $this->thumbDest = public_path('assets/img/products/');
    }

	/**
	 * Отображает список продуктов.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$data['products'] = Product::with('productType')->get();

        return view('admin.products.list.index', $data);
	}

    /**
     * Отображение страницы добавления продукта.
     *
     * @return \Illuminate\View\View
     */
    public function getCreate()
    {
        $this->shareDataToView();

        return view('admin.products.list.create');
    }

    /**
     * Обработчик запроса на создание продукта.
     *
     * @param StoreProductsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(StoreProductsRequest $request)
    {
        // Создаём продукт, заполняем данными, сохраняем
        $product = new Product;
        $product->title = trim($request->get('title'));
        $product->product_type_id = $request->get('product_type_id');
        $product->description_short = trim($request->get('description_short'));
        $product->description_full = trim($request->get('description_full'));
        $product->price_old = $request->get('price_old');
        $product->price_new = $request->get('price_new');
        $product->enabled = $request->get('enabled', FALSE);
        $product->is_on_main = $request->get('is_on_main', FALSE);
        $product->file_name = $this->saveImageToDisk();
        $product->save();

        return redirect()->action('Admin\ProductsController@getEdit', array('id' => $product->id))
            ->with('success', 'Продукт успешно отредактирован.');
    }

    /**
     * Отображение страницы редактирования продукта.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function getEdit($id)
    {
        $data['product'] = $this->findProduct($id);

        $this->shareDataToView();

        return view('admin.products.list.edit', $data);
    }

    /**
     * Обработчик запроса на редактирование продукта.
     *
     * @param StoreProductsRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit(StoreProductsRequest $request, $id)
    {
        $product = $this->findProduct($id);
        $product->title = trim($request->get('title'));
        $product->product_type_id = $request->get('product_type_id');
        $product->description_short = trim($request->get('description_short'));
        $product->description_full = trim($request->get('description_full'));
        $product->price_old = $request->get('price_old');
        $product->price_new = $request->get('price_new');
        $product->enabled = $request->get('enabled', FALSE);
        $product->is_on_main = $request->get('is_on_main', FALSE);
        if ($request->hasFile('file_name'))
        {
            $product->file_name = $this->saveImageToDisk($product->file_name);
        }
        $product->save();

        return redirect()->action('Admin\ProductsController@getEdit', array('id' => $id))
            ->with('success', 'Продукт успешно отредактирован.');
    }

    /**
     * Удаление продукта
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id)
    {
        // Ищем и удаляем продукт и его изображение
        $product = $this->findProduct($id);
        File::delete($this->thumbDest . $product->file_name);
        $product->delete();

        return redirect()->back()
            ->with('success', 'Продукт успешно удалён.');
    }

    /**
     * Передаёт в шаблон данные: категории продутвоы, производители, поставщики.
     */
    private function shareDataToView()
    {
        $data['product_types'] = ProductType::all();

        view()->share($data);
    }

    /**
     * Поиск продукта в БД по ид или переадресация на 404
     *
     * @param $id
     * @return \Illuminate\Support\Collection|null|static
     */
    private function findProduct($id)
    {
        // Ищем продукт
        $product = Product::with(['productType', 'images'])->find($id);
        if (empty($product))
        {
            abort(404);
        }

        return $product;
    }

    /**
     * Удаление изображения продукта
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteImage($id)
    {
        $image = ProductImage::with('product.images')->find($id);
        if (empty($image))
        {
            abort(404);
        }

        // Удаляем картинку с ЖД
        $dir = $this->thumbDest.$image->product->id.'/';
        File::delete($dir.$image->file_name);

        // Смотрим есть ли еще изображения у продукта. Нет - удаляем весь каталог
        if (count($image->product->images) == 1)
        {
            File::deleteDirectory($dir);
        }

        $image->delete();

        return redirect()->back()->with('success', 'Изображение успешно удалено.');
    }

    /**
     * Действие обработки запроса на добавление изображения
     * @param $id id продукта, которому добавляем изображение
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreateImage(Request $request, $id)
    {
        $this->validate($request, [
            'file_name' => 'required|image',
        ], [
            'file_name.required' => 'Необходимо выбрать изображение.',
            'file_name.image' => 'Выбранный файл должен быть изображением.'
        ]);

        // Создаём изображение и сохраняем
        $image = new ProductImage;
        $image->product_id = $id;
        $image->file_name = $this->saveImageToDisk($id);
        $image->save();

        return redirect()->back()->with('success', 'Изображение успешно добавлено.');
    }

    /**
     * Метод для добавления изображения в соотв. папку
     *
     * @param $id id продукта, которому добавляем изображение
     * @return string Название загруженного файла с его расширением
     */
    private function saveImageToDisk($id)
    {
        // Название изображения
        $name = str_random(10);

        // Загруженный файл
        $upload_file = Input::file('file_name');

        // Если каталога не существует, то создаём
        $dir = $this->thumbDest.$id.'/';
        if (!is_dir($dir))
        {
            mkdir($dir);
        }

        Image::make($upload_file)
            ->resize(973, 615)
            ->save($dir.$name.'.'.$upload_file->getClientOriginalExtension());


        return $name.'.'.$upload_file->getClientOriginalExtension();
    }
}
