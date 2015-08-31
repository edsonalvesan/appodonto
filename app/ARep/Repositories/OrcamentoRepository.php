<?php namespace App\ARep\Repositories;

use App\Orcamento as Orcamento;

class OrcamentoRepository implements IOrcamentoRepository
{

    function __construct()
    {

    }


public function index()
{

$contratos = Orcamento::with('paciente','atendimentos')->orderBy('id')->paginate(50);


return $contratos;

}

public function store($input)
{
    
 $result = $this->showOrcamentoPeloPaciente($input['paciente_id']);

  if (!$result) {

    $contrato = new Orcamento();
    
    $contrato->fill($input);

    $result = $contrato->save();
    
   return $result;

  }
    return $result;
}

public function show($id)
{

    $contrato = Orcamento::with('paciente')->find($id);

    return $contrato;
}

public function showOrcamentoPeloPaciente($id)
{

$record = \DB::table('orcamentos')
                     ->where('paciente_id', '=' ,$id)
                     ->select('id')
                     ->first(); 

if ($record == null) 
{
    return null;
}
else 
{
    return $record->id;
 } 
                     
}

public function update($input, $id)
{

	$contrato = $this->show($id);

    $contrato->fill($input);
    
    //$input['data_inicio'] = date('Y-m-d', strtotime(str_replace('/', '-', $input['data_inicio'])));
    

    
    $result = $contrato->save();

   return $result;

}

public function destroy($id)
{

	$contrato = $this->show($id);

    $result = $contrato->delete();

    return $result;

}

}
