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
    return view('home');
});
Route::group(['prefix' => 'aluno'], function () {
    Route::get('/', ['uses' => 'AlunoController@index', 'as' => 'aluno.list']);
    Route::get('/form', ['uses' => 'AlunoController@form', 'as' => 'aluno.form']);
    Route::post('/salvar', ['uses' => 'AlunoController@salvar', 'as' => 'aluno.salvar']);
    Route::get('/deletar/{id}', ['uses' => 'AlunoController@deletar', 'as' => 'aluno.deletar']);
});

Route::group(['prefix' => 'paciente'], function () {
    Route::get('/', ['uses' => 'PacienteController@index', 'as' => 'paciente.index']);
    Route::get('/form', ['uses' => 'PacienteController@form', 'as' => 'paciente.form']);
    Route::post('/salvar', ['uses' => 'PacienteController@salvar', 'as' => 'paciente.salvar']);
    Route::get('/deletar/{id}', ['uses' => 'PacienteController@deletar', 'as' => 'paciente.deletar']);
});

    Route::group(['prefix' => 'triagem'], function () {
    Route::get('/', ['uses' => 'TriagemController@index', 'as' => 'triagem.index']);
    Route::get('/form', ['uses' => 'TriagemController@form', 'as' => 'triagem.form']);
});

Route::group(['prefix' => 'funcionario'], function () {
    Route::get('/', ['uses' => 'FuncionarioController@index', 'as' => 'funcionario.index']);
    Route::get('/form', ['uses' => 'FuncionarioController@form', 'as' => 'funcionario.form']);
    Route::post('/salvar', ['uses' => 'FuncionarioController@salvar', 'as' => 'funcionario.salvar']);

});