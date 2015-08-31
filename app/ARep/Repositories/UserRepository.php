<?php namespace App\ARep\Repositories;

use App\User;
use \DB as DB;

class UserRepository implements IUserRepository
{

  public function show($id)
  {
    return User::find($id);
  }

  public function store($request)
  {
    $user = new User();
    $user->fill($request);
    $user->save();
    return $user;
  }

  public function update($id, $request)
  {
    $user = User::find($id);
    $user->fill($request);
    $user->save();
    return $user;
  }

  public function destroy($id)
  {
    $user = User::find($id);
    $user->delete();
    return true;
  }
}