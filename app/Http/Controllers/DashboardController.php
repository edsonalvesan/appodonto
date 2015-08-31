<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\ARep\Repositories\IDashboardRepository as DashboardRepository;

use Illuminate\Http\Request;

class DashboardController extends Controller {

    protected $dashboardRepository;

	public function __construct(DashboardRepository $dashboardRepository)
	{
		$this->middleware('auth');
		$this->dashboardRepository = $dashboardRepository;
	}

	public function index()
	{
	  
	  $atendimentos = $this->dashboardRepository->index();

	  $atendimentosMesAtual = $this->dashboardRepository->atendimentosMesAtual();
      
      $atendimentosMesAnterior = $this->dashboardRepository->atendimentosMesAnterior();

	  return view('dashboard.index')->with(compact('atendimentos','atendimentosMesAtual','atendimentosMesAnterior'));	

	}



}
