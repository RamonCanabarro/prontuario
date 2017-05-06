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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//inicio rotas de exemplo

//Route::get('/deposito/form', ['uses' => 'DepositoController@form', 'as' => 'deposito.form']);
//Route::get('/deposito', ['uses' => 'DepositoController@index', 'as' => 'deposito.index']);
//Route::post('/deposito/salvar', ['uses' => 'DepositoController@salvar', 'as' => 'deposito.salvar']);
//Route::get('/deposito/excluir/{id_deposito}', ['uses' => 'DepositoController@excluir', 'as' => 'deposito.excluir'])->where('id_deposito', '[0-9]+');
//Route::get('/deposito/alterar/{id_deposito}', ['uses' => 'DepositoController@form', 'as' => 'deposito.alterar'])->where('id_deposito', '[0-9]+');
//Route::get('/ativar/{id_deposito}', ['uses' => 'DepositoController@ativar', 'as' => 'deposito.ativo']);

Route::get('/teste', ['uses' => 'TesteController@index', 'as' => 'teste.index']);