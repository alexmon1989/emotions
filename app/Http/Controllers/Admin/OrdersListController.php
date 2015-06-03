<?php namespace Emotions\Http\Controllers\Admin;

use Emotions\Http\Requests;

use Emotions\Order;
use Emotions\Product;
use Emotions\ProductType;
use Illuminate\Http\Request;
use Emotions\Http\Requests\StoreOrdersRequest;
use Illuminate\Support\Facades\Input;

class OrdersListController extends AdminController {


	/**
	 * Отображает список заказов.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$data['orders'] = Order::all();

        return view('admin.orders.list.index', $data);
	}

    /**
     * Отображение страницы редактирования заказа.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function getEdit($id)
    {
        $data['order'] = $this->findOrder($id);

        // продукты (вдруг надо изменить продукт)
        $data['products'] = Product::orderBy('title')->get();

        return view('admin.orders.list.edit', $data);
    }

    /**
     * Обработчик запроса на редактирование заказа.
     *
     * @param StoreOrdersRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit(StoreOrdersRequest $request, $id)
    {
        $product = $this->findOrder($id);
        $product->name = trim($request->get('name'));
        $product->phone = trim($request->get('phone'));
        $product->email = trim($request->get('email'));
        $product->comments = $request->get('comments');
        $product->product_json = Product::find(($request->get('product_id')))->toJson();
        $product->completed = $request->get('completed', FALSE);
        $product->save();

        return redirect()->action('Admin\OrdersListController@getEdit', array('id' => $id))
                         ->with('success', 'Заказ успешно отредактирован.');
    }

    /**
     * Удаление заказа
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id)
    {
        // Ищем и удаляем заказ
        $order = $this->findOrder($id);
        $order->delete();

        return redirect()->back()
            ->with('success', 'Заказ успешно удалён.');
    }

    /**
     * Поиск заказа в БД по ид или переадресация на 404
     *
     * @param $id
     * @return \Illuminate\Support\Collection|null|static
     */
    private function findOrder($id)
    {
        // Ищем заказ
        $order = Order::find($id);
        if (empty($order))
        {
            abort(404);
        }

        return $order;
    }
}
