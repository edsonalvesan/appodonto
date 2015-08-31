<?php namespace App\ARep\Repositories;

Interface IOrcamentoRepository
{
public function index();
public function store($input);
public function show($id);
public function update($input, $id);
public function destroy($id);
public function showOrcamentoPeloPaciente($id);
}