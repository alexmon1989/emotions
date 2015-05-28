<?php namespace Emotions\Http\Controllers\Marketing;

use Emotions\Article;
use Emotions\Http\Requests;
use Emotions\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AboutController extends Controller {

	/**
	 * показывает страницу "О Компании".
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        $data['article'] = Article::where('type', '=', 'about_article')->first();

		return view('marketing.about.index', $data);
	}

}
