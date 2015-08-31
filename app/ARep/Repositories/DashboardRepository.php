<?php namespace App\ARep\Repositories;

use App\Atendimento as Atendimento;

class DashboardRepository implements IDashboardRepository
{

public function index()
{

$atendimentos = \DB::table('atendimentos')
                  ->join('orcamentos', 'atendimentos.orcamento_id', '=', 'orcamentos.id')
                  ->join('pacientes', 'orcamentos.paciente_id', '=', 'pacientes.id')   
                     ->select(\DB::raw('max(data) as data'))
                     ->select('data','pacientes.id','pacientes.nome','pacientes.celular', 'pacientes.telefone','pacientes.email')
                     ->groupBy('pacientes.id')
                     ->havingRaw('max(data) + 180 < CURRENT_DATE')
                     ->get();

 return $atendimentos;

}

public function atendimentosMesAtual()
{

$record = \DB::table('atendimentos')
                     ->whereraw('MONTH(data) = MONTH(CURRENT_DATE)')
                     ->select(\DB::raw('count(id) as qtd'))
                     ->first(); 

return $record->qtd;                     

}

public function atendimentosMesAnterior()
{

$record = \DB::table('atendimentos')
                     ->whereraw('MONTH(data) = (MONTH(CURRENT_DATE)-1)')
                     ->select(\DB::raw('count(id) as qtd'))
                     ->first();

return $record->qtd;                     

}


}