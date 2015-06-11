<?php namespace Emotions\Http\Controllers\Marketing;

use Emotions\Article;
use Emotions\Http\Controllers\Controller;
use Emotions\Http\Requests\StoreOrdersRequest;
use Emotions\Order;
use Emotions\Product;
use Illuminate\Support\Facades\Mail;
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
        $data['products'] = Product::with('images')
                                ->where('enabled', '=', TRUE)
                                ->where('is_on_main', '=', TRUE)
                                ->paginate(12); //dd($data['products']);

		return view('marketing.home.index', $data);
	}

    /**
     * Обработчик запроса на заказ товара.
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
        if (Memory::get('orders.send_to_email'))
        {
           $text = 'Для просмотра данных заказа перейдите по адресу http://emotions15.ru/admin/orders/list/edit/'.$product->id;
           $subject = 'Новый заказ на сайте emotions15.ru';
           Mail::raw($text, function($message) use (&$request, &$subject)
           {
               $message->from('orders@emotions15.ru', 'emotions15.ru');
               $message->subject($subject);

               $message->to(Memory::get('orders.email_to', 'info@emotions.ru'));
           });
        }

        return response()->json([]);
    }

}
