<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AtendimentoRequest extends Request {


	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
		    'procedimento'                => 'required',
		    'data'                        => 'required'
		  ];
	}

    
    public function messages()
	{
		return [

		    'procedimento.required'        => 'Descrição do Procedimento é obrigatório',
		    'data.required'                => 'Preencha a data do atendimento'
		    ];
	}

}
