<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

/**
 * Web Routes [membro]
 */
// Listagem de membro
Route::get('/', 'MembroController@listMembro');
/**
 * Web Routes [membro]
 */
// Listagem de membro
Route::get('/desativados', 'MembroController@listMembroDesativados');

// detalhes do membro
Route::get('/dtlMembro/{id}', 'MembroController@detalhesMembro');

// detalhes do membro
Route::get('/formDisableMembro/{id}', 'MembroController@formDisableMembro');
// detalhes do membro
Route::get('/formAbilitarMembro/{id}', 'MembroController@formAbilitarMembro');

// formulario para cadastro de membro
Route::get('/formMembro/{action}/{id?}', 'MembroController@formMembro');

// gravar o membro politico no banco de dados
Route::post('/saveMembro', 'MembroController@saveMembro');

// editar o membro politico no banco de dados
Route::post('/editMembro', 'MembroController@editMembro');

// editar o membro politico no banco de dados
Route::get('/disableMembro/{id}', 'MembroController@disableMembro');

// editar o membro politico no banco de dados
Route::get('/abilitarMembro/{id}', 'MembroController@abilitarMembro');
/**
 * Web Routes [lista de Cidades]
 */
Route::get('get-cidades/{id}', 'MembroController@getCidades');







/* CHART.JS */
Route::get('/charts-js', function () {
    return view('example-view.charts-js');
});

/* Google Charts */
Route::get('/google-chart', function () {
    return view('example-view.google-chart');
});

Route::get('/teste', 'TesteController@index');
Route::get('/testeMembro', 'MembroController@index');

Route::get('/testecon', 'ParlamentarController@teste');

Auth::routes();

Route::get('/home', 'HomeController@index');


