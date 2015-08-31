<?php namespace App\ARep\Repositories;

interface IUserRepository
{
  public function show($id);
  public function update($id, $request);
  public function store($request);
}