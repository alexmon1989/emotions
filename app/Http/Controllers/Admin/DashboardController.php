<?php namespace Emotions\Http\Controllers\Admin;

use Emotions\Http\Requests;
use Emotions\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends AdminController {

	/**
	 * Действие для отображения Dashboard
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('admin.dashboard.index');
	}
}
