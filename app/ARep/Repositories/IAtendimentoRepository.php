<?php namespace App\ARep\Repositories;

Interface IAtendimentoRepository
{
public function index($id);
public function store($input,$id);
public function storeorcamento($input,$id);
public function show($id);
public function update($input, $id);
public function destroy($id);
public function saldoPaciente($id);
public function creditoPaciente($id);
public function debitoPaciente($id);
}