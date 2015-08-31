<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'auth'], function()
{

Route::get('/', 'DashboardController@index');

Route::group(['prefix'=>'dashboard','where'=>['id'=>'[0-9]+']],function() {
 
    Route::get('',                ['as'=>'dashboard',               'uses'=>'DashboardController@index']);     
});

Route::group(['prefix'=>'clinicas','where'=>['id'=>'[0-9]+']],function() {
 
    Route::get('',                ['as'=>'clinicas',               'uses'=>'ClinicaController@index']);
    
    Route::get('create',          ['as'=>'clinicas.create',        'uses'=>'ClinicaController@create']);

    Route::get('{id}/view',       ['as'=>'clinicas.view',          'uses'=>'ClinicaController@view']);

    Route::post('store',          ['as'=>'clinicas.store',         'uses'=>'ClinicaController@store']);

    Route::delete('{id}/destroy', ['as'=>'clinicas.destroy',       'uses'=>'ClinicaController@destroy']);

    Route::get('{id}/editar',     ['as'=>'clinicas.edit',          'uses'=>'ClinicaController@edit']);

    Route::post('{id}/update',    ['as'=>'clinicas.update',        'uses'=>'ClinicaController@update']);       
});

Route::group(['prefix'=>'pacientes','where'=>['id'=>'[0-9]+']],function() {
 
    Route::get('',                ['as'=>'pacientes',          'uses'=>'PacienteController@index']);
    
    Route::get('create',          ['as'=>'pacientes.create',   'uses'=>'PacienteController@create']);

    Route::post('store',          ['as'=>'pacientes.store',    'uses'=>'PacienteController@store']);

    Route::delete('{id}/destroy', ['as'=>'pacientes.destroy',  'uses'=>'PacienteController@destroy']);

    Route::get('{id}/editar',     ['as'=>'pacientes.edit',     'uses'=>'PacienteController@edit']);

    Route::get('{id}/orcamento',  ['as'=>'pacientes.orcamento',     'uses'=>'PacienteController@ViewOrcamento']);

    Route::post('{id}/update',    ['as'=>'pacientes.update',   'uses'=>'PacienteController@update']);       
});

Route::group(['prefix'=>'orcamentos','where'=>['id'=>'[0-9]+']],function() {
 
    Route::get('',                   ['as'=>'orcamentos', 'uses'=>'OrcamentoController@index']);
    
    Route::get('create',             ['as'=>'orcamentos.create', 'uses'=>'OrcamentoController@create']);

    Route::post('store',             ['as'=>'orcamentos.store', 'uses'=>'OrcamentoController@store']);
  
    Route::delete('{id}/destroy',    ['as'=>'orcamentos.destroy', 'uses'=>'OrcamentoController@destroy']);

    Route::get('{id}/atendimentos',  ['as'=>'orcamentos.edit', 'uses'=>'OrcamentoController@edit']);
    
    Route::get('{id}/novoatendimeto',['as'=>'atendimento.create', 'uses'=>'AtendimentoController@create']);
    
    Route::get('{id}/novoorcamento', ['as'=>'atendimento.created', 'uses'=>'AtendimentoController@created']);

    Route::post('{id}/store',        ['as'=>'atendimento.store', 'uses'=>'AtendimentoController@store']);

    Route::post('{id}/storeorcamento',['as'=>'atendimento.storeorcamento', 'uses'=>'AtendimentoController@storeorcamento']);

     Route::post('{id}/update',      ['as'=>'orcamentos.update', 'uses'=>'AtendimentoController@update']); 

    Route::post('{orcamento_id}/{id}/update', ['as'=>'atendimento.update', 'uses'=>'AtendimentoController@update']); 

    Route::get('{orcamento_id}/{id}/editar',  ['as'=>'atendimento.edit', 'uses'=>'AtendimentoController@edit']);     
});

  /**
  * Usuarios
  */
  Route::group(['prefix' => 'usuarios'], function()
  {
    Route::get('',                   ['as' => 'user.index', 'uses' => 'UserController@index']);
    Route::get('{id}/detalhes',      ['as' => 'user.show', 'uses' => 'UserController@show']);
    Route::post('store',             ['as' => 'user.store', 'uses' => 'UserController@store']);
    Route::get('{id}/editar',        ['as' => 'user.edit', 'uses' => 'UserController@edit']);
    Route::post('{id}/atualizar',    ['as' => 'user.update', 'uses' => 'UserController@update']);
    Route::get('{id}/remover',       ['as' => 'user.destroy', 'uses' => 'UserController@destroy']);
  });

Route::group(['prefix' => 'perfil'], function()
  {
    Route::get('', ['as' => 'profile.index', 'uses' => 'UserController@profile']);
    Route::get('editar', ['as' => 'profile.edit', 'uses' => 'UserController@edit']);
    Route::post('atualizar', ['as' => 'profile.update', 'uses' => 'UserController@update']);
    Route::get('senha', ['as' => 'profile.password', 'uses' => 'UserController@password']);
    Route::post('senha', ['as' => 'profile.savePassword', 'uses' => 'UserController@savePassword']);
  });

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
