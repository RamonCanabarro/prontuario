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
    Route::get('/incluir', ['uses' => 'AlunoController@incluir', 'as' => 'aluno.incluir']);
    Route::get('/alterar/{id}', ['uses' => 'AlunoController@alterar', 'as' => 'aluno.alterar']);
    Route::post('/salvar', ['uses' => 'AlunoController@salvar', 'as' => 'aluno.salvar']);
    Route::post('/list/{id}', ['uses' => 'AlunoController@list', 'as' => 'aluno.list']);
    Route::get('/deletar/{id}', ['uses' => 'AlunoController@deletar', 'as' => 'aluno.deletar']);
});

Route::group(['prefix' => 'paciente'], function () {
    Route::get('/', ['uses' => 'PacienteController@index', 'as' => 'paciente.index']);
    Route::get('/form', ['uses' => 'PacienteController@form', 'as' => 'paciente.form']);
    Route::post('/salvar', ['uses' => 'PacienteController@salvar', 'as' => 'paciente.salvar']);
    Route::get('/alterar/{id}',['uses' => 'PacienteController@alterar', 'as' => 'paciente.alterar']);
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
    Route::get('/alterar/{id}',['uses' => 'SupervisorController@alterar', 'as' => 'supervisor.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'SupervisorController@deletar', 'as' => 'supervisor.deletar']);
});
Route::group(['prefix' => 'composicaoFamiliar'], function () {
    Route::get('/', ['uses' => 'ComposicaoFamiliarController@index', 'as' => 'composicaoFamiliar.index']);
    Route::get('/form', ['uses' => 'ComposicaoFamiliarController@form', 'as' => 'composicaoFamiliar.form']);
    Route::post('/salvar', ['uses' => 'ComposicaoFamiliarController@salvar', 'as' => 'composicaoFamiliar.salvar']);
    Route::get('/alterar/{id}',['uses' => 'ComposicaoFamiliarController@alterar', 'as' => 'composicaoFamiliar.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'ComposicaoFamiliarController@deletar', 'as' => 'composicaoFamiliar.deletar']);
});
    Route::group(['prefix' => 'doencaCronica'], function () {
    Route::get('/', ['uses' => 'DoencaController@index', 'as' => 'doencaCronica.index']);
    Route::get('/form', ['uses' => 'DoencaController@form', 'as' => 'doencaCronica.form']);
    Route::post('/salvar', ['uses' => 'DoencaController@salvar', 'as' => 'doencaCronica.salvar']);
    Route::get('/alterar/{id}',['uses' => 'DoencaController@alterar', 'as' => 'doencaCronica.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'DoencaController@deletar', 'as' => 'doencaCronica.deletar']);
});
    Route::group(['prefix' => 'doencaCronica'], function () {
    Route::get('/', ['uses' => 'DoencaCronicaController@index', 'as' => 'doencaCronica.index']);
    Route::get('/form', ['uses' => 'DoencaCronicaController@form', 'as' => 'doencaCronica.form']);
    Route::post('/salvar', ['uses' => 'DoencaCronicaController@salvar', 'as' => 'doencaCronica.salvar']);
    Route::get('/alterar/{id}',['uses' => 'DoencaCronicaController@alterar', 'as' => 'doencaCronica.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'DoencaCronicaController@deletar', 'as' => 'doencaCronica.deletar']);
});
Route::group(['prefix' => 'drogas'], function () {
    Route::get('/', ['uses' => 'DrogasController@index', 'as' => 'drogas.index']);
    Route::get('/form', ['uses' => 'DrogasController@form', 'as' => 'drogas.form']);
    Route::post('/salvar', ['uses' => 'DrogasController@salvar', 'as' => 'drogas.salvar']);
    Route::get('/alterar/{id}',['uses' => 'DrogasController@alterar', 'as' => 'drogas.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'DrogasController@deletar', 'as' => 'drogas.deletar']);
});

Route::group(['prefix' => 'triagemDrogas'], function () {
    Route::get('/', ['uses' => 'TriagemDrogasController@index', 'as' => 'triagemDrogas.index']);
    Route::get('/form', ['uses' => 'TriagemDrogasController@form', 'as' => 'triagemDrogas.form']);
    Route::post('/salvar', ['uses' => 'TriagemDrogasController@salvar', 'as' => 'triagemDrogas.salvar']);
    Route::get('/alterar/{id}',['uses' => 'TriagemDrogasController@alterar', 'as' => 'triagemDrogas.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'TriagemDrogasController@deletar', 'as' => 'triagemDrogas.deletar']);
});

    Route::group(['prefix' => 'familiar'], function () {
    Route::get('/', ['uses' => 'FamiliarController@index', 'as' => 'familiar.index']);
    Route::get('/form', ['uses' => 'FamiliarController@form', 'as' => 'familiar.form']);
    Route::post('/salvar', ['uses' => 'FamiliarController@salvar', 'as' => 'familiar.salvar']);
    Route::get('/alterar/{id}',['uses' => 'FamiliarController@alterar', 'as' => 'familiar.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'FamiliarController@deletar', 'as' => 'familiar.deletar']);
});
 Route::group(['prefix' => 'gasto'], function () {
    Route::get('/', ['uses' => 'GastoController@index', 'as' => 'gasto.index']);
    Route::get('/form', ['uses' => 'GastoController@form', 'as' => 'gasto.form']);
    Route::post('/salvar', ['uses' => 'GastoController@salvar', 'as' => 'gasto.salvar']);
    Route::get('/alterar/{id}',['uses' => 'GastoController@alterar', 'as' => 'gasto.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'GastoController@deletar', 'as' => 'gasto.deletar']);
});
 Route::group(['prefix' => 'gastoSaude'], function () {
    Route::get('/', ['uses' => 'GastoSaudeController@index', 'as' => 'gastoSaude.index']);
    Route::get('/form', ['uses' => 'GastoSaudeController@form', 'as' => 'gastoSaude.form']);
    Route::post('/salvar', ['uses' => 'GastoSaudeController@salvar', 'as' => 'gastoSaude.salvar']);
    Route::get('/alterar/{id}',['uses' => 'GastoSaudeController@alterar', 'as' => 'gastoSaude.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'GastoSaudeController@deletar', 'as' => 'gastoSaude.deletar']);
});
Route::group(['prefix' => 'patrimonio'], function () {
    Route::get('/', ['uses' => 'PatrimonioController@index', 'as' => 'patrimonio.index']);
    Route::get('/form', ['uses' => 'PatrimonioController@form', 'as' => 'patrimonio.form']);
    Route::post('/salvar', ['uses' => 'PatrimonioController@salvar', 'as' => 'patrimonio.salvar']);
    Route::get('/alterar/{id}',['uses' => 'PatrimonioController@alterar', 'as' => 'patrimonio.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'PatrimonioController@deletar', 'as' => 'patrimonio.deletar']);
});
    Route::group(['prefix' => 'triagempatrimonio'], function () {
    Route::get('/', ['uses' => 'TriagemPatrimonioController@index', 'as' => 'triagempatrimonio.index']);
    Route::get('/form', ['uses' => 'TriagemPatrimonioController@form', 'as' => 'triagempatrimonio.form']);
    Route::post('/salvar', ['uses' => 'TriagemPatrimonioController@salvar', 'as' => 'triagempatrimonio.salvar']);
    Route::get('/alterar/{id}',['uses' => 'TriagemPatrimonioController@alterar', 'as' => 'triagempatrimonio.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'TriagemPatrimonioController@deletar', 'as' => 'triagempatrimonio.deletar']);
});
    Route::group(['prefix' => 'renda'], function () {
    Route::get('/', ['uses' => 'RendaController@index', 'as' => 'renda.index']);
    Route::get('/form', ['uses' => 'RendaController@form', 'as' => 'renda.form']);
    Route::post('/salvar', ['uses' => 'RendaController@salvar', 'as' => 'renda.salvar']);
    Route::get('/alterar/{id}',['uses' => 'RendaController@alterar', 'as' => 'renda.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'RendaController@deletar', 'as' => 'renda.deletar']);
});
Route::group(['prefix' => 'triagemRenda'], function () {
    Route::get('/', ['uses' => 'TriagemRendaController@index', 'as' => 'triagemRenda.index']);
    Route::get('/form', ['uses' => 'TriagemRendaController@form', 'as' => 'triagemRenda.form']);
    Route::post('/salvar', ['uses' => 'TriagemRendaController@salvar', 'as' => 'triagemRenda.salvar']);
    Route::get('/alterar/{id}',['uses' => 'TriagemRendaController@alterar', 'as' => 'triagemRenda.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'TriagemRendaController@deletar', 'as' => 'triagemRenda.deletar']);
});
    Route::group(['prefix' => 'programaSocial'], function () {
    Route::get('/', ['uses' => 'ProgramaSocialController@index', 'as' => 'programaSocial.index']);
    Route::get('/form', ['uses' => 'ProgramaSocialController@form', 'as' => 'programaSocial.form']);
    Route::post('/salvar', ['uses' => 'ProgramaSocialController@salvar', 'as' => 'programaSocial.salvar']);
    Route::get('/alterar/{id}',['uses' => 'ProgramaSocialController@alterar', 'as' => 'programaSocial.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'ProgramaSocialController@deletar', 'as' => 'programaSocial.deletar']);
});
Route::group(['prefix' => 'triagemPrograma'], function () {
    Route::get('/', ['uses' => 'TriagemProgramaController@index', 'as' => 'triagemPrograma.index']);
    Route::get('/form', ['uses' => 'TriagemProgramaController@form', 'as' => 'triagemPrograma.form']);
    Route::post('/salvar', ['uses' => 'TriagemProgramaController@salvar', 'as' => 'triagemPrograma.salvar']);
    Route::get('/alterar/{id}',['uses' => 'TriagemProgramaController@alterar', 'as' => 'triagemPrograma.alterar']);
    Route::get('/deletar/{id}', ['uses' => 'TriagemProgramaController@deletar', 'as' => 'triagemPrograma.deletar']);
});

