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
    return view('teste.form');
});

Auth::routes();

//Route::group(['prefix'=>'paciente'], function (){
//    Route::get('/list', ['uses' => 'PacienteController@listagem', 'as' => 'paciente.list']);
//});
//Route::get('/home', 'HomeController@index')->name('home');

//inicio rotas de exemplo
//
//Route::get('/teste', ['uses' => 'TesteController@index', 'as' => 'teste.index']);
Route::get('/triagem/index', ['uses' => 'TriagemController@index', 'as' => 'triagem.index']);
Route::get('/triagem/form', ['uses' => 'TriagemController@form', 'as' => 'triagem.form']);