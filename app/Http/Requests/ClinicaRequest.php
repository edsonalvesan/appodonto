<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClinicaRequest extends Request {

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
		    'nome' => 'required|min:5'
		];
	}

	public function messages()
	{
		return [
		    'nome.required' => 'Nome Obrigatorio',
		    'nome.min'=> 'O nome deve conter pelo menos 5 caracteres',
		];
	}

}
