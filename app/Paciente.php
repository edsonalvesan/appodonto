<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model {

	use SoftDeletes;

    protected $dates = ['deleted_at'];

	protected $fillable = 
	['nome',
	'nacimento',
	'email',
	'telefone',
	'celular',
	'clinica_id'
	];

	public function getNomeAttribute($value)
	{
		return strtoupper($value); 
	}

	public function getContatoAttribute($value)
	{
		return strtoupper($value); 
	}

	public function getNacimentoAttribute($value)
	{
		return date('d/m/Y', strtotime($value)); 
	}

	public function setNacimentoAttribute($value)
	{
       $this->attributes['nacimento'] = date('Y-m-d', strtotime(str_replace('/', '-', $value)));
	}
}
