<?php namespace Emotions\Http\Controllers\Admin;

use Emotions\Http\Requests;
use Emotions\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Emotions\Article;
use Emotions\Http\Requests\StoreArticlesRequest;
use Illuminate\Support\Facades\Input;

class PaymentsController extends AdminController {

    protected $articleType = 'payments_article';

	/**
	 * Отображает страницу редактирования статьи "Доставка и оплата"
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        // Получение данных блоков
        $data['article'] = Article::where('type', '=', $this->articleType)
                                  ->first();

        return view('admin.payments.index', $data);
	}

    /**
     * Обработчик запроса на редактирования данных
     */
    public function postIndex(StoreArticlesRequest $request)
    {
        $article = Article::firstOrNew(['type' => $this->articleType]);
        $article->full_text = Input::get('full_text');
        $article->save();

        return redirect()->action('Admin\PaymentsController@getIndex')
                         ->with('success', 'Статья успешно сохранена.');
    }

}
