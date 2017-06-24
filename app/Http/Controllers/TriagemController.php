<?php

namespace App\Http\Controllers;

use App\Triagem;
use App\Http\Requests\TriagemRequest;

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
        Triagem::create($dados->all());
        return redirect(route('triagem.index'));
    }
    public function deletar($dados)
    {
        Triagem::where('id_triagem',$dados)->delete();
        return redirect(route('triagem.index'));
    }

}

