<?php namespace Emotions\Http\Controllers\Admin;

use Emotions\Http\Requests;
use Emotions\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Emotions\Article;
use Emotions\Http\Requests\StoreArticlesRequest;
use Illuminate\Support\Facades\Input;

class MainArticleController extends AdminController {

    protected $articleType = 'main_article';

	/**
	 * Отображает страницу редактирования главной статьи
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        // Получение данных блоков
        $data['article'] = Article::where('type', '=', $this->articleType)
                                  ->first();

        return view('admin.main.index', $data);
	}

    /**
     * Обработчик запроса на редактирования данных
     */
    public function postIndex(StoreArticlesRequest $request)
    {
        $article = Article::firstOrNew(['type' => $this->articleType]);
        $article->full_text = Input::get('full_text');
        $article->save();

        return redirect()->action('Admin\MainArticleController@getIndex')
                         ->with('success', 'Статья успешно сохранена.');
    }

}
