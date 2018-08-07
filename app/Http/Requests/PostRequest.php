<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class PostRequest extends FormRequest
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
            


        	'email' => 'required|email',


			'subject' => 'required|max:255',
			'text' => 'required|max:65535'

        ];
    }

	public function messages()
	{
		return[
			
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => 'メールアドレスは正しいメールアドレス形式で入力してください。',
			'subject.required' => '題を入力してください。',
			'subject.max' => '題は255文字以内で入力',
			'text.required' => '本文　入力して',
			'text.max' => '本文　多い',
		];
	}
}
