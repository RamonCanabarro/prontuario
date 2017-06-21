<?php

namespace App\Http\Controllers;

use App\Triagem;
use Illuminate\Http\Request;

class TriagemController extends Controller
{
    public function form()
    {
        return view('triagem.form');
    }
    public function index()
    {
        $dados = Triagem::all();

        return view('triagem.index', compact('dados'));
    }

    public function salvar(TriagemRequest $dados)
    {
        Aluno::create($dados->all());
        return redirect(route('triagem.index'));
    }
    public function deletar($dados)
    {
        Aluno::where('id_triagem',$dados)->delete();
        return redirect(route('triagem.index'));
    }

}

