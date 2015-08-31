<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClinicaRequest;
use App\ARep\Repositories\IClinicaRepository as Repository;
use \Response as Response;
use App\Clinica as Clinica;

class ClinicaController extends Controller {

	protected $repository;


	public function __construct(Repository $repository)
	{
		$this->middleware('auth');
		$this->repository = $repository;
	}


	public function index()
	{
		 
		$search = \Request::get('search');

        $clinicas = $this->repository->index($search);
         

        return view('clinicas.index')->with(compact('clinicas','search'));
	}

	public function create()
	{
	  
	  return view('clinicas.create');
	}

	public function store(ClinicaRequest $request)
	{
		
		$result = $this->repository->store($request->all());        
        
        return $this->retornoOperacao($result,'salvar');
        

	}


	public function edit($id)
	{         
        $clinica =$this->repository->show($id);
         
        return view('clinicas.edit',compact('clinica'));
	}

	
	public function update(ClinicaRequest $request, $id)
	{       
      
      $result = $this->repository->update($request->all(),$id);
      
      return $this->retornoOperacao($result,'salvar');

	}

	public function view($id)
	{     
            $clinica =$this->repository->show($id);
            return view('clinicas.view',compact('clinica'));
	}

	public function destroy($id)
	{
        
        $result = $this->repository->destroy($id);

        $result= $this->retornoOperacao($result,'remover'); 

	}

	protected function retornoOperacao($retorno,$tipo)
	{
	    if(!$retorno)
        {
            if($tipo == 'salvar')
	         {
	           return redirect()->back()->withInput()->withErrors(['Falha ao salvar Clinica']);

	         }
               return redirect()->back()->withInput()->withErrors(['Falha ao remover Clinica']);

        }

            if($tipo == 'salvar')
	         {
	           return redirect()->route('clinicas')->with('success', 'Clinica salva com sucesso!');	

	         }
               return redirect()->route('clinicas')->with('success', 'Clinica removida com sucesso!');	
	}
	
}
