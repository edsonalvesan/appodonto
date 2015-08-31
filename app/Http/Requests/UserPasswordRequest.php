<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserPasswordRequest extends Request {


	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
            'password' => 'required|min:4',
            'password_confirmation' => 'same:password'
		  ];
	}

	public function messages()
	{
		return 
		[

			    'password.required' => 'O campo senha é obrigatório!',
			    'password.min' => 'A senha precisa ter pelo menos 4 caracteres',
			    'password_confirmation.same' => 'As senhas não conferem!'

		   ];
	}



}
