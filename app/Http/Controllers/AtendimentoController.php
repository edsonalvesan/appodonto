<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AtendimentoRequest;
use \App\ARep\Repositories\IAtendimentoRepository as AtendimentoRepository;
use App\ARep\Repositories\IOrcamentoRepository as OrcamentoRepository;

class AtendimentoController extends Controller {

	protected $atendimentoRepository;
	protected $orcamentoRepository;

	public function __construct(AtendimentoRepository $atendimentoRepository, OrcamentoRepository $orcamentoRepository)
	{
		$this->middleware('auth');
		$this->atendimentoRepository = $atendimentoRepository;
		$this->orcamentoRepository = $orcamentoRepository;
	}


	public function index()
	{
		
	}

	public function pagamento($id)
	{
		
	}

	public function create($id)
	{		
		$orcamento = $this->orcamentoRepository->show($id);

		return view('atendimento.create')->with(compact('orcamento'));	
	}

	public function created($id) 
	{		
		$orcamento = $this->orcamentoRepository->show($id);

		return view('atendimento.created')->with(compact('orcamento'));	
	}


	public function store(AtendimentoRequest $request, $id)
	{		
		$result = $this->atendimentoRepository->store($request->all(),$id);

        return $this->retornoOperacao($result,'salvar',$id); 
	}

	public function storeorcamento(AtendimentoRequest $request, $id)
	{		
		
		$result = $this->atendimentoRepository->storeorcamento($request->all(),$id);

        return $this->retornoOperacao($result,'salvar',$id); 
	}


	public function show($id)
	{
		
	}


	public function edit($orcamento_id,$id)
	{	
	    $atendimento = $this->atendimentoRepository->show($id);

	    $orcamento = $this->orcamentoRepository->show($orcamento_id);
        
        return view('atendimento.edit')->with(compact('orcamento','atendimento'));			
	}

	public function update(AtendimentoRequest $request,$orcamento_id,$id)
	{		
		$result = $this->atendimentoRepository->update($request->all(),$id);

        return $this->retornoOperacao($result,'salvar',$orcamento_id);
	}


	public function destroy($id)
	{
		
	}

	protected function retornoOperacao($retorno,$tipo,$id)
	{
	    if(!$retorno)
        {
            if($tipo == 'salvar')
	         {
	           return redirect()->back()->withInput()->withErrors(['Falha ao salvar Atendimento']);

	         }
               return redirect()->back()->withInput()->withErrors(['Falha ao remover Atendimento']);

        }

            if($tipo == 'salvar')
	         {
	           return redirect()->route('orcamentos.edit',['id'=>$id])->with('success', 'Atendimento salvo com sucesso!');	

	         }
               return redirect()->route('orcamentos.edit',['id'=>$id])->with('success', 'Atendimento removido com sucesso!');	
	}

}
