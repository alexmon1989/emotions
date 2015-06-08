<?php namespace Emotions\Http\Controllers\Admin;

use Emotions\Http\Requests;
use Emotions\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Orchestra\Support\Facades\Memory;

class OrdersSettingsController extends AdminController {

    // Правила и сообщения валидации
    protected $rules = array(
        'send_to_email' => 'boolean',
        'email_to' => 'required|email',
    );
    protected $messages = array(
        'send_to_email.boolean' => 'Поле "Включено" содержит неверное значение.',
        'email_to.required' => 'Укажите E-Mail адрес.',
        'email_to.email' => 'Поле содержит неправильный E-Mail адрес.',
    );

    /**
     * Отображение страницы редактирования настроек отправки сообщений с сайта при заказе.
     *
     * @return Response
     */
    public function getIndex()
    {
        return view('admin.orders.settings.index');
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
        Memory::put('orders.send_to_email', trim($request->get('send_to_email')));
        Memory::put('orders.email_to', trim($request->get('email_to')));
        return redirect()->back()->with('success', 'Данные успешно сохранены.');
    }
}
