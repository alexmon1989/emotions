<?php namespace Emotions\Http\Controllers\Marketing;

use Emotions\Article;
use Emotions\Http\Controllers\Controller;
use Emotions\Http\Requests\StoreOrdersRequest;
use Emotions\Order;
use Emotions\Product;
use Orchestra\Support\Facades\Memory;

class HomeController extends Controller {

	/**
	 * Главная страница.
	 *
	 * @return Response
	 */
	public function index()
	{
        // Получаем статью
        $data['article'] = Article::where('type', '=', 'main_article')->first();

        // Получаем товары
        $data['products'] = Product::orderBy('price_new')
                                ->orderBy('title')
                                ->where('enabled', '=', TRUE)
                                ->where('is_on_main', '=', TRUE)
                                ->get();

		return view('marketing.home.index', $data);
	}

    /**
     * Обработчик запроса на заказ товара
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function makeOrder(StoreOrdersRequest $request)
    {
        // добавляем заказ в БД
        $product = new Order();
        $product->name = trim($request->get('name'));
        $product->phone = trim($request->get('phone'));
        $product->email = trim($request->get('email'));
        $product->comments = $request->get('comments');
        $product->product_json = Product::find(($request->get('product_id')))->toJson();
        $product->save();

        // Отправляем письмо, если это предусмотрено настройками
        if (Memory::get('orders.sen_to_email'))
        {

        }

        /*$subject = 'Новый заказ на сайте emotions15.ru';
        Mail::raw($subject, function($message) use (&$request, &$subject)
        {
            $message->from($request->get('email'), $request->get('name'));
            $message->subject($subject);

            $message->to(Memory::get('price_request.email_to', 'kalashnikov@kalashnikovcom.ru'));
        });*/

        return response()->json([]);
    }

}
