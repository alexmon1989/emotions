<?php namespace Emotions\Http\Controllers\Admin;

use Emotions\Http\Requests;
use Emotions\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Emotions\Action;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Emotions\Http\Requests\StoreActionsRequest;
use Intervention\Image\Facades\Image;
use Orchestra\Support\Facades\Memory;

class ActionsController extends AdminController {

    // Расположение картинок-превью акций
    protected $thumbDest;

    public function __construct()
    {
        parent::__construct();

        $this->thumbDest = public_path('assets/img/actions/');
    }

	/**
	 * Отображает список акций.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        $data['actions'] = Action::all();

		return view('admin.actions.index', $data);
	}

	/**
	 * Отображает страницу редактирования акции
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
        $data['action'] = Action::find($id);

        if (empty($data['action'])) {
            abort(404);
        }

        return view('admin.actions.edit', $data);
	}

	/**
	 * Обработчик запроса на редактирование новости
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit(StoreActionsRequest $request, $id)
	{
        $action = Action::find($id);

        if (empty($action)) {
            abort(404);
        }

        // меняем данные и сохраняем
        $action->title = trim(Input::get('title'));
        $action->full_text = Input::get('full_text');
        $action->preview_text = Input::get('preview_text');
        if ($request->hasFile('file_name'))
        {
            $action->file_name = $this->createThumbnail($action->file_name);
        }
        $action->save();

        return redirect()->action('Admin\ActionsController@getEdit', array('id' => $id))
                         ->with('success', 'Акция успешно сохранена.');
	}

	/**
	 * Отображает страницу создания акции
	 *
	 * @return Response
	 */
	public function getCreate()
	{
        return view('admin.actions.add');
	}

	/**
	 * Обработчик запроса на создание акции
	 *
	 * @return Response
	 */
	public function postCreate(StoreActionsRequest $request)
	{
		$action = new Action;
        $action->title = trim(Input::get('title'));
        $action->full_text = Input::get('full_text');
        $action->preview_text = Input::get('preview_text');
        $action->file_name = $this->createThumbnail();
        $action->save();

        return redirect()->action('Admin\ActionsController@getEdit', array('id' => $action->id))
                        ->with('success', 'Акция успешно сохранена.');
	}

	/**
	 * Удаляет акцию
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{
        $action = Action::find($id);

        if (empty($action)) {
            abort(404);
        }

        // Удаляем изображение
        File::delete($this->thumbDest.$action->thumbnail);

        $action->delete();

        return redirect()->action('Admin\ActionsController@getIndex')
                        ->with('success', 'Акция успешно удалена.');
	}

    /**
     * Метод для добавления изображения в соотв. папку
     */
    private function createThumbnail($old_name = NULL)
    {
        // Название изображения
        $name = str_random(10);

        // Загруженный файл
        $upload_file = Input::file('file_name');

        Image::make($upload_file)
            ->resize(973, 615)
            ->save($this->thumbDest.$name.'.'.$upload_file->getClientOriginalExtension());

        // Если есть старый файл, то удаляем его
        if ($old_name)
        {
            File::delete( $this->thumbDest.$old_name );
        }

        return $name.'.'.$upload_file->getClientOriginalExtension();
    }

}
