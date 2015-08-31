<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atendimento extends Model {

	use SoftDeletes;

    protected $dates = ['deleted_at'];

	protected $fillable = 
 [
			'orcamento_id',
			'data',
			'procedimento',
			'data_pagamento',
			'valor',
			'juros',
			'tipo_valor'
];	


	public function getDataAttribute($value)
	{
		return date('d/m/Y', strtotime($value)); 
	}


	public function getValorAttribute($value)
	{
		return number_format($value,2,',','.'); 
	}


	public function setDataAttribute($value)
	{
       $this->attributes['data'] = date('Y-m-d', strtotime(str_replace('/', '-', $value)));
	}

	public function orcamento()
	{
		return $this->belongsTo('App\Orcamento', 'orcamento_id'); 
	} 

}
