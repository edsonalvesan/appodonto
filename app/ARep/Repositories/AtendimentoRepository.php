<?php namespace App\ARep\Repositories;

use App\Atendimento as Atendimento;

class AtendimentoRepository implements IAtendimentoRepository
{


public function index($id)
{
 
 $atendimentos = Atendimento::where('orcamento_id',$id)->orderBy('data')->paginate(50);

 return $atendimentos;

}

public function saldoPaciente($id)
{
 
 $saldoincial = \DB::table('orcamentos')->where('id', '=', + $id)->sum('valor');
 
 return $saldoincial;


}

public function creditoPaciente($id)
{

 $credito = \DB::table('atendimentos')->where('tipo_valor', '=', '0')->where('orcamento_id', '=', + $id)->sum('valor');

 return $credito;

}

public function debitoPaciente($id)
{

 $debito = \DB::table('atendimentos')->where('tipo_valor', '=', '1')->where('orcamento_id', '=', + $id)->sum('valor');
 
 return $debito;

}


public function store($input,$id)
{
    
    $atendimento = new Atendimento();
    
    $atendimento->fill($input);

    $atendimento->orcamento_id = $id;

    $atendimento->valor = ($input['valor'] * -1);

    $result = $atendimento->save();

    return $result;

}

public function storeorcamento($input,$id)
{
    
    $atendimento = new Atendimento();
    
    $atendimento->fill($input);

    $atendimento->orcamento_id = $id;

    $atendimento->tipo_valor = 1;

    $result = $atendimento->save();

    return $result;

}

public function show($id)
{
    
    $atendimento = Atendimento::find($id);

    return $atendimento;
}

public function update($input, $id)
{
	
	$atendimento = $this->show($id);

    $atendimento->fill($input);
    
    $result = $atendimento->save();

   return $result;

}

public function destroy($id)
{

	$atendimento = $this->show($id);

    $result = $atendimento->delete();

    return $result;

}

public function convertData($value)
{
      
  return date('Y-m-d', strtotime(str_replace('/', '-', $value)));

}

}