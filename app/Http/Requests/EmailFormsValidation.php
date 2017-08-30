<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailFormsValidation extends FormRequest
{
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
        return [
	        'email_to' => 'required',
	        'email_from' => 'required',
	        'subject' => 'required',
	        'body' => 'required',
        ];
    }
	
	public function messages()
	{
		return [
			'email_to.required' => 'Адрес(a) отправки обязательно должен быть заполнен!',
			'email_from.required' => 'Адрес «от кого» обязательно должен быть заполнен!',
			'subject.required' => 'Тема письма обязательно должна быть заполнена!',
			'body.required'  => 'Тело сообщение обязательно должно быть заполнено!',
		];
	}
}
