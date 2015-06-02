<?php namespace Emotions\Http\Requests;

class StoreActionsRequest extends Request {

    protected $rules = [
        'title' => 'required|max:255',
        'full_text' => 'required',
        'preview_text' => 'required',
        'file_name' => 'image',
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
            'preview_text.required' => 'Поле "Текст превью" обязательно для заполнения.',
            'full_text.required' => 'Поле "Текст полный" обязательно для заполнения.',
            'file_name.image' => 'Поле "Изображение" должно быть изображением.',
            'file_name.required' => 'Поле "Изображение" обязательно для заполнения.',
        ];
    }

}
