<?php

namespace App\Http\Controllers;

use App\Triagem;
use Illuminate\Http\Request;

class TriagemController extends Controller
{
    public function index()
    {
        $nome = 'ricardo';
        return view('triagem.index', compact('nome'));
    }
    public function form()
    {
        return view('triagem.form');
    }
    public function alterar($id){

      $dados = Triagem::where('idteste', $id)->get()->first();

//        echo '<pre>';
//        print_r($tratardados['nome']);
//        die;

        return view ('triagem.form', compact('dados'));
    }
    public function salvar($dados)
    {
        $resultado = Triagem::salvar($dados);
        if ($resultado){
            return view('listagem');
        }else
        {
            echo 'erro';
        }
    }
}
