<?php namespace Emotions\Http\Controllers\Marketing;

use Emotions\Http\Requests;
use Emotions\Http\Controllers\Controller;

use Emotions\Action;
use Illuminate\Http\Request;

class ActionsController extends Controller {

	/**
	 * Отображение индексной страницы новостей
	 */
	public function getIndex()
	{
        $data['actions'] = Action::orderBy('created_at', 'DESC')->paginate(4);
        return view('marketing.actions.index', $data);
	}

	/**
	 * Отображение одной новости
	 *
	 * @param  int  $id  id новости в таблице БД
	 * @return Response
	 */
	public function getShow($id)
	{
        // Получаем новость из БД
        $data['action'] = Action::find($id);

        if (!empty($data['action'])){
            // Последние 3 новости
            $data['latest_actions'] = Action::where('id', '<>', $id)
                                        ->orderBy('created_at', 'DESC')
                                        ->take(3)
                                        ->get();

            // Отображаем представление
            return view('marketing.actions.show', $data);
        } else {
            abort(404);
        }
	}

}
