<?php namespace App\ARep\Repositories;

Interface IClinicaRepository
{

public function index($search);
public function store($input);
public function show($id);
public function update($input, $id);
public function destroy($id);
public function UsuariosForSelect();

}