<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orcamento extends Model {

 use SoftDeletes;

 protected $dates = ['deleted_at'];

 protected $fillable = 
 [
	'paciente_id',
	'descricao',
    'valor'
 ]; 

	public function paciente()
	{
		return $this->belongsTo('App\Paciente', 'paciente_id')->withTrashed(); 
	}

  public function atendimentos()
  {
      return  $this->hasMany('App\Atendimento', 'orcamento_id');
  }

    public function soma()
   { 
     $value = $this->atendimentos()->sum('valor');
     
     return $value;
   }

   public function returnCredit()
   {
    return $this->atendimentos()->where('tipo_valor','=',0)->sum('valor');
   }





}
