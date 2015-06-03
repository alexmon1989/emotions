<?php namespace Emotions\Http\Requests;

class StoreOrdersRequest extends Request {

    protected $rules = [
        'name' => 'required|max:255',
        'phone' => 'required|max:255',
        'email' => 'required|email|max:255',
        'product_id' => 'required|integer|exists:products,id',
        'completed' => 'boolean',
    ];

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return $this->rules;
	}

    /**
     * Сообщения ошибок
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Поле "Название" обязательно для заполнения.',
            'name.max' => 'Количество символов в поле "Название" не может превышать :max.',
            'phone.required' => 'Поле "Телефон" обязательно для заполнения.',
            'phone.max' => 'Количество символов в поле "Телефон" не может превышать :max.',
            'email.required' => 'Поле "E-Mail" обязательно для заполнения.',
            'email.max' => 'Количество символов в поле "E-Mail" не может превышать :max.',
            'email.email' => 'Поле "E-Mail" должно содержать правильный электронный адрес.',
            'product_id.required' => 'Поле "Продукт" обязательно для заполнения.',
            'product_id.integer' => 'Поле "Продукт" должно содержать значение целого типа.',
            'product_id.exists' => 'Поле "Продукт" должно содержать существующий продукт.',
            'completed.boolean' => 'Поле "Обработано" должно иметь значение логического типа.',
        ];
    }

}
