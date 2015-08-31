<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class OrcamentoRequest extends Request {


	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
		    'paciente_id'        => 'required',
            'descricao'             => 'required'
		  ];
	}

    
    public function messages()
	{
		return [

		    'paciente_id.required'            => 'Paciente obrigatorio',
            'descricao.required'             => 'Descrição obrigatoria'
		];
	}

}
