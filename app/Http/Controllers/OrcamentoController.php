<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrcamentoRequest;
use App\ARep\Repositories\IOrcamentoRepository as OrcamentoRepository;
use App\ARep\Repositories\IPacienteRepository as PacienteRepository;
use App\ARep\Repositories\IAtendimentoRepository as AtendimentoRepository;

class OrcamentoController extends Controller {
	
	protected $orcamentoRepository;
	protected $pacienteRepository;
	protected $atendimentoRepository;

	public function __construct(OrcamentoRepository $orcamentoRepository, PacienteRepository $pacienteRepository,
		                        AtendimentoRepository $atendimentoRepository)
	{
		$this->middleware('auth');
		$this->orcamentoRepository = $orcamentoRepository;
		$this->pacienteRepository = $pacienteRepository;
		$this->atendimentoRepository = $atendimentoRepository;
	}

	public function index()
	{
		 $orcamentos = $this->orcamentoRepository->index();
         
         return view('orcamentos.index',['orcamentos'=>$orcamentos]);
	}


	public function create()
	{
		
        $pacientesForSelect = $this->pacienteRepository->PacientesForSelect();
		
		return view('orcamentos.create')->with(['pacientesForSelect' => $pacientesForSelect]);
	
	}


	public function store(OrcamentoRequest $request)
	{
		
		$result = $this->orcamentoRepository->store($request->all());

		if ($result == false) {
           
           return $this->retornoOperacao($result,'salvar');
         
         } elseif ($result === true) {
           
           return $this->retornoOperacao($result,'salvar');
         } 
         else 
         {      
             return redirect()->route('orcamentos.edit',['id'=>$result])->with('success', 'Paciente já possui orçamento!');
          }
        
	}

	public function edit($id)
	{
		
        $atendimentos = $this->atendimentoRepository->index($id);

        $saldo = $this->atendimentoRepository->saldoPaciente($id);

        $credito = $this->atendimentoRepository->creditoPaciente($id);

        $debito = $this->atendimentoRepository->debitoPaciente($id);

		$orcamento = $this->orcamentoRepository->show($id);
        


        return view('orcamentos.edit')->with(compact('orcamento','atendimentos','saldo','credito','debito'));
	}


	public function update(OrcamentoRequest $request, $id)
	{
		
		$result = $this->orcamentoRepository->update($request->all(),$id);

        return $this->retornoOperacao($result,'salvar');
	}

	public function destroy($id)
	{
		
		$result = $this->orcamentoRepository->destroy($id);

        return $this->retornoOperacao($result,'remover');
	}

	protected function retornoOperacao($retorno,$tipo)
	{
	    if(!$retorno)
        {
            if($tipo == 'salvar')
	         {
	           return redirect()->back()->withInput()->withErrors(['Falha ao salvar Orçamento']);

	         }
               return redirect()->back()->withInput()->withErrors(['Falha ao remover Orçamento']);

        }

            if($tipo == 'salvar')
	         {
	           return redirect()->route('orcamentos')->with('success', 'Orçamento salvo com sucesso!');	

	         }
               return redirect()->route('orcamentos')->with('success', 'Orçamento removido com sucesso!');	
	}

}
