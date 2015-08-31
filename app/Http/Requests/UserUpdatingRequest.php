<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserUpdatingRequest extends Request {


	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
		    'name' => 'required',
            'email' => 'required|email'
		  ];
	}

	public function messages()
	{
		return 
		[

			    'name.required' => 'O campo nome é obrigatório!',
			    'email.required' => 'O campo e-mail é obrigatório!'

		   ];
	}



}
