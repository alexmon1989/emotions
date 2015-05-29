<?php namespace Emotions\Http\Controllers\Marketing;

use Emotions\Article;
use Emotions\Http\Controllers\Controller;
use Emotions\Product;

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
        $data['products'] = Product::getProductCategorized();
        //dd($data['products']);


		return view('marketing.home.index', $data);
	}

}
