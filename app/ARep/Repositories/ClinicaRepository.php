<?php namespace App\ARep\Repositories;

use App\Clinica as Clinica;

class ClinicaRepository implements IClinicaRepository
{

public function index($search)
{
        
        if(!is_null($search) && !empty($search))
        {
          
           $usuarios = Clinica::where('nome','like','%'.$search.'%')->orderBy('nome')->paginate(50);

        } else {
            
            $usuarios = Clinica::orderBy('nome')->paginate(50);

        }

        return $usuarios;

}

public function store($input)
{
    
    $usuario = new Clinica();
    
    $usuario->fill($input);
    
    $result = $usuario->save();

    return $result;

}

public function show($id)
{
    
    $usuario = Clinica::find($id);

    return $usuario;

}

public function update($input, $id)
{
    
    $usuario = $this->show($id);

    $usuario->fill($input);
    
    $result = $usuario->save();

   return $result;


}

public function destroy($id)
{

    $usuario = $this->show($id);

    $result = $usuario->delete();

    return $result;

}

public function UsuariosForSelect()
{

    $usuarios = Clinica::all();

    return $usuarios->lists('nome', 'id');

}

}