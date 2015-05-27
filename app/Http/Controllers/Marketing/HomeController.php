<?php namespace Emotions\Http\Controllers\Marketing;

use Emotions\Http\Controllers\Controller;

class HomeController extends Controller {

	/**
	 * Главная страница.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('marketing.home.index');
	}

}
