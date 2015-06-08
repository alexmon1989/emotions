<?php namespace Emotions\Http\Requests;

class StoreProductsRequest extends Request {

    protected $rules = [
        'title' => 'required|max:255',
        'product_type_id' => 'required|integer|exists:product_types,id',
        'description_short' => 'max:255',
        'description_full' => 'required',
        'price_new' => 'required|numeric',
        'price_old' => 'numeric',
        'file_name' => 'image',
        'is_on_main' => 'boolean',
        'enabled' => 'boolean',
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
        if (Request::segment(3) == 'create')
        {
            $this->rules['file_name'] .= '|required';
        }
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
            'title.required' => 'Поле "Название" обязательно для заполнения.',
            'title.max' => 'Количество символов в поле "Название" не может превышать :max.',
            'product_type_id.required' => 'Поле "Тип продукта" обязательно для заполнения.',
            'product_type_id.integer' => 'Поле "Тип продукта" должно быть целым числом.',
            'product_type_id.exists' => 'Поле "Тип продукта" должно содержать существующий тип.',
            'description_full.required' => 'Поле "Описание полное" обязательно для заполнения.',
            'description_short.max' => 'Количество символов в поле "Описание для главной" не может превышать :max.',
            'price_new.required' => 'Поле "Цена новая" обязательно для заполнения.',
            'price_new.numeric' => 'Поле "Цена новая" должно иметь значение числового типа.',
            'price_old.numeric' => 'Поле "Цена новая" должно иметь значение числового типа.',
            'file_name.image' => 'Поле "Изображение" должно быть изображением.',
            'file_name.required' => 'Поле "Изображение" обязательно для заполнения.',
            'is_on_main.boolean' => 'Поле "На главной" должно иметь значение логического типа.',
            'is_on_main.boolean' => 'Поле "На главной" должно иметь значение логического типа.',
            'enabled.boolean' => 'Поле "Включено" должно иметь значение логического типа.',
        ];
    }

}
