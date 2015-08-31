<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\PacienteRequest;
use App\ARep\Repositories\IPacienteRepository as PacienteRepository;
use App\ARep\Repositories\IClinicaRepository as ClinicaRepository;
use App\ARep\Repositories\IAtendimentoRepository as AtendimentoRepository;
use App\ARep\Repositories\IOrcamentoRepository as OrcamentoRepository;

class PacienteController extends Controller {

	protected $pacienteRepository;
	protected $clinicaRepository;
	protected $orcamentoRepository;
	protected $atendimentoRepository;

	public function __construct(PacienteRepository $pacienteRepository, ClinicaRepository $clinicaRepository,
		OrcamentoRepository $orcamentoRepository,AtendimentoRepository $atendimentoRepository)
	{
		$this->middleware('auth');
		$this->pacienteRepository = $pacienteRepository;
		$this->clinicaRepository = $clinicaRepository;
		$this->orcamentoRepository = $orcamentoRepository;
		$this->atendimentoRepository = $atendimentoRepository;
	}

	public function index()
	{
		 
        $search = \Request::get('search');

        $pacientes = $this->pacienteRepository->index($search);

        return view('pacientes.index')->with(compact('pacientes','search'));
	
	}

	public function create()
	{
		
		$usuariosForSelect = $this->clinicaRepository->usuariosForSelect();
		
		return view('pacientes.create')->with(['usuariosForSelect' => $usuariosForSelect]);
	
	}

	public function store(PacienteRequest $request)
	{    
        $result = $this->pacienteRepository->store($request->all());

        return $this->retornoOperacao($result,'salvar'); 

	}


	public function edit($id)
	{	    
  
        $paciente = $this->pacienteRepository->show($id);
        $usuariosForSelect = $this->clinicaRepository->usuariosForSelect();
        
        return view('pacientes.edit')->with(compact('paciente','usuariosForSelect'));

	}


	public function update(PacienteRequest $request, $id)
	{	
       
        $result = $this->pacienteRepository->update($request->all(),$id);

        return $this->retornoOperacao($result,'salvar');

	}

	public function destroy($id)
	{
        
        $result = $this->pacienteRepository->destroy($id);

        return $this->retornoOperacao($result,'remover');
        
	}

	public function ViewOrcamento($id)
	{
   
        $id_orcamento = $this->orcamentoRepository->showOrcamentoPeloPaciente($id);

	   if ($id_orcamento == null)
	   {
          return redirect()->back()->withInput()->withErrors(['Não existe nenhum orçamento para este paciente']);
	   }
	   else
	   {

	    $atendimentos = $this->atendimentoRepository->index($id_orcamento);

        $saldo = $this->atendimentoRepository->saldoPaciente($id_orcamento);

        $credito = $this->atendimentoRepository->creditoPaciente($id_orcamento);

        $debito = $this->atendimentoRepository->debitoPaciente($id_orcamento);

		$orcamento = $this->orcamentoRepository->show($id_orcamento);
        
        return view('orcamentos.edit')->with(compact('orcamento','atendimentos','saldo','credito','debito'));	
	}

	}


	protected function retornoOperacao($retorno,$tipo)
	{
	    if(!$retorno)
        {
            if($tipo == 'salvar')
	         {
	           return redirect()->back()->withInput()->withErrors(['Falha ao salvar Paciente']);

	         }
               return redirect()->back()->withInput()->withErrors(['Falha ao remover Paciente']);

        }

            if($tipo == 'salvar')
	         {
	           return redirect()->route('pacientes')->with('success', 'Paciente salvo com sucesso!');	

	         }
               return redirect()->route('pacientes')->with('success', 'Paciente removido com sucesso!');	
	}

}
