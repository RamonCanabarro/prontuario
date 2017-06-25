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
    Route::get('/', ['uses' => 'AlunoController@index', 'as' => 'aluno.index']);
    Route::get('/form', ['uses' => 'AlunoController@form', 'as' => 'aluno.form']);
    Route::put('/alterar/{id}', ['uses' => 'AlunoController@form', 'as' => 'aluno.alterar']);
    Route::post('/salvar', ['uses' => 'AlunoController@salvar', 'as' => 'aluno.salvar']);
    Route::get('/deletar/{id}', ['uses' => 'AlunoController@deletar', 'as' => 'aluno.deletar']);
});

Route::group(['prefix' => 'paciente'], function () {
    Route::get('/', ['uses' => 'PacienteController@index', 'as' => 'paciente.index']);
    Route::get('/form', ['uses' => 'PacienteController@form', 'as' => 'paciente.form']);
    Route::post('/salvar', ['uses' => 'PacienteController@salvar', 'as' => 'paciente.salvar']);
    Route::post('/alterar/{id}',['uses' => 'PacienteController@alterar', 'as' => 'paciente.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'PacienteController@deletar', 'as' => 'paciente.deletar']);
});

    Route::group(['prefix' => 'triagem'], function () {
    Route::get('/', ['uses' => 'TriagemController@index', 'as' => 'triagem.index']);
    Route::get('/form', ['uses' => 'TriagemController@form', 'as' => 'triagem.form']);
    Route::post('/salvar', ['uses' => 'TriagemController@salvar', 'as' => 'triagem.salvar']);
    });

    Route::group(['prefix' => 'supervisor'], function () {
    Route::get('/', ['uses' => 'SupervisorController@index', 'as' => 'supervisor.index']);
    Route::get('/form', ['uses' => 'SupervisorController@form', 'as' => 'supervisor.form']);
    Route::post('/salvar', ['uses' => 'SupervisorController@salvar', 'as' => 'supervisor.salvar']);
    Route::put('/alterar/{id}',['uses' => 'SupervisorController@form', 'as' => 'supervisor.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'SupervisorController@deletar', 'as' => 'supervisor.deletar']);
});