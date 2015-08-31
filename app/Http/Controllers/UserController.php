<?php namespace App\Http\Controllers;

use \Auth as Auth;
use \App\Http\Requests\UserUpdatingRequest as UserUpdatingRequest;
use \App\Http\Requests\UserPasswordRequest as UserPasswordRequest;
use \App\ARep\Repositories\IUserRepository as UserRepository;
use \App\ARep\Repositories\Services\Validators\UserCreatingValidator as ValidatorCreating;
use \App\ARep\Repositories\Services\Validators\UserUpdatingValidator as ValidatorUpdating;
use \App\ARep\Repositories\Services\Validators\UserPasswordValidator as ValidatorPassword;

class UserController extends Controller {

  protected $userRepository;


  function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  public function index()
  {
    $user = $this->userRepository->show(Auth::user()->id);

    return view('user.profile')->with(compact('user'));
  }

  public function edit($id = null)
  {
    if(!is_null($id))
    {
      /**
      * Atende ao gerenciamento de usuários
      */
      $search = Request::get('search');

      $users = $this->userRepository->users($search);

      $selectedUser = $this->userRepository->show($id);

      return view('user.index')->with(compact('search', 'users', 'selectedUser'));

    } else {

      /**
      * Atende ao usuário logado
      */
      $user = $this->userRepository->show(Auth::user()->id);

      return view('user.edit')->with(compact('user'));
    }
  }

  public function update(UserUpdatingRequest $request, $id = null)
  {

     $result =  $this->userRepository->update(Auth::user()->id, $request->all());

    if(!$result)
    {
          return redirect()->back()->withInput()->withErrors(['Falha ao salvar Paciente']);
    }

    return redirect()->route('profile.index')->with('success', 'Seu perfil foi atualizado com sucesso!');
  
    }

  public function store()
  {
    $request = Request::all();

    if(!$this->validatorCreating->passes())
    {
      return redirect()->back()->withError($this->validatorCreating->getErrors());
    }

    $this->userRepository->store($request);

    return redirect()->back()->with('success', 'Usuário criado com sucesso!');
  }

  public function destroy($id)
  {
    $this->userRepository->destroy($id);

    $page = 'page=' . Request::get('page', 1);

    return redirect()->route('user.index', $page)->with('destroy', 'Usuário removido com sucesso!');
  }

  public function profile()
  {
    return view('user.profile')->with('user', Auth::user());
  }

  public function password()
  {
    $user = $this->userRepository->show(Auth::user()->id);

    return view('user.password')->with(compact('user'));
  }

  public function savePassword(UserPasswordRequest $request)
  {

   $result = $this->userRepository->update(Auth::user()->id, $request->all());  

    if(!$result)
    {
          return redirect()->back()->withInput()->withErrors(['Falha ao Alterar senha']);
    }

    Auth::logout();
    
    return redirect()->route('dashboard')->with('success', 'Senha alterada com sucesso!');

  }

  public function current()
  {
    return Response::json(Auth::getUser()->toArray(), 200);
  }

}