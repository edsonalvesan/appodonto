<?php namespace App\ARep\Repositories;

use App\Paciente as Paciente;

class PacienteRepository implements IPacienteRepository
{

public function index($search)
{
        if(!is_null($search) && !empty($search))
        {
          
           $proprietarios = Paciente::where('nome','like','%'.$search.'%')->orderBy('nome')->paginate(50);

        } else {
            
            $proprietarios = Paciente::orderBy('nome')->paginate(50);

        }

        return $proprietarios;

}


public function store($input)
{
	    
    $proprietario = new Paciente();
    
    $proprietario->fill($input);
    
    $result = $proprietario->save();

    return $result;

}

public function show($id)
{
    $proprietario = Paciente::find($id);

    return $proprietario;
}


public function update($input, $id)
{

    $proprietario = $this->show($id);

    $proprietario->fill($input);
    
    $result = $proprietario->save();

   return $result;

}

public function destroy($id)
{
    
    $proprietario = $this->show($id);

    $result = $proprietario->delete();

    return $result;

}

public function PacientesForSelect()
{
    
    $pacientes = Paciente::all();


    return $pacientes->lists('nome', 'id');
}

}