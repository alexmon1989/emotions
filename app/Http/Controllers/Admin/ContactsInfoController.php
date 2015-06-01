<?php namespace Emotions\Http\Controllers\Admin;

use Emotions\Http\Requests;
use Emotions\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Emotions\Article;
use Emotions\Http\Requests\StoreArticlesRequest;
use Emotions\Http\Requests\StoreCoordsRequest;
use Illuminate\Support\Facades\Input;

class ContactsInfoController extends AdminController {

	/**
	 * Отображение страницы редактирования контактной информации.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        // Контактные данные
        $data['contacts_article'] = Article::where('type', '=', 'contacts_article')
            ->first();
        $data['contacts_widget'] = Article::where('type', '=', 'contacts_widget')
            ->first();
        $data['business_hours_widget'] = Article::where('type', '=', 'business_hours_widget')
            ->first();

		return view('admin.contacts.info.index', $data);
	}

    /**
     * Действие для обработки запроса на редактирование статьи.
     *
     * @param StoreArticlesRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postIndex(StoreArticlesRequest $request)
    {
        $article = Article::firstOrNew(['type' => Input::get('type')]);
        $article->full_text = Input::get('full_text');
        $article->save();

        return redirect()->action('Admin\ContactsInfoController@getIndex')
            ->with('success', 'Данные успешно сохранены.');
    }

}
