<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clinica extends Model {

	use SoftDeletes;

    protected $dates = ['deleted_at'];

	protected $fillable = 
	['nome'];


	public function getNomeAttribute($value)
	{
		return strtoupper($value); 
	}

	public function getContatoAttribute($value)
	{
		return strtoupper($value); 
	}

	public function contratos()
	{
		return $this->hasMany('App\Usuario','usuario_id'); 
	}


}
