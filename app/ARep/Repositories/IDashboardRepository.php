<?php namespace App\ARep\Repositories;

Interface IDashboardRepository
{
public function index();
public function atendimentosMesAtual();
public function atendimentosMesAnterior();

}