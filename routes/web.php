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
Route::group(['prefix'=>'aluno'], function (){
    Route::get('/', ['uses' => 'AlunoController@index', 'as' => 'aluno.list']);
    Route::get('/form', ['uses' => 'AlunoController@form', 'as' => 'aluno.form']);
    Route::post('/salvar', ['uses' => 'AlunoController@salvar', 'as' => 'aluno.salvar']);
});