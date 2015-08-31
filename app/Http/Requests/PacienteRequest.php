<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PacienteRequest extends Request {


	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
		    'nome' => 'required|min:5'
		];
	}


	public function messages()
	{
		return [
		    'nome.required' => 'Nome Obrigatorio',
		    'nome.min'=> 'O nome deve conter pelo menos 5 caracteres'
		];
	}

}
