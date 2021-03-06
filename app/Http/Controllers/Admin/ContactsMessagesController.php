<?php namespace Emotions\Http\Controllers\Admin;

use Emotions\Http\Requests;
use Emotions\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Emotions\Article;
use Illuminate\Support\Facades\Validator;
use Orchestra\Support\Facades\Memory;

class ContactsMessagesController extends AdminController {

    // Правила и сообщения валидации
    protected $rules = array(
        'email_to' => 'required|email',
    );
    protected $messages = array(
        'email_to.required' => 'Укажите E-Mail адрес.',
        'email_to.email' => 'Поле содержит неправильный E-Mail адрес.',
    );

	/**
	 * Отображение страницы редактирования настроек отправки сообщений с сайта.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('admin.contacts.messages.index');
	}

    /**
     * Обработчик запроса на сохранение запроса
     *
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function postIndex(Request $request)
    {
        $v = Validator::make($request->all(), $this->rules, $this->messages);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        // Сохраняем данные
        Memory::forget('contacts.email_from');
        Memory::put('contacts.email_to', trim($request->get('email_to')));
        return redirect()->back()->with('success', 'Данные успешно сохранены.');
    }

}
