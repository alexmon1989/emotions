<?php namespace Emotions\Http\Controllers\Marketing;

use Emotions\Article;
use Emotions\Http\Controllers\Controller;

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

		return view('marketing.home.index', $data);
	}

}
