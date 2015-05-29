<?php namespace Emotions\Http\Controllers\Marketing;

use Emotions\Article;
use Emotions\Http\Requests;
use Emotions\Http\Controllers\Controller;

use Emotions\Product;
use Illuminate\Http\Request;

class PaymentsController extends Controller {

	/**
	 * Отображает страницу "Оплата и доставка".
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        $data['article'] = Article::where('type', '=', 'payments_article')->first();

        return view('marketing.payments.index', $data);
	}
}
