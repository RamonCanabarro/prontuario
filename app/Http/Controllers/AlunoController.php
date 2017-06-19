<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Http\Requests\AlunoRequest;

class AlunoController extends Controller
{
    public function index()
    {
        $dados = Aluno::all();

        return view('aluno.list', compact('dados'));
    }
    public function form()
    {
            return view('aluno.form');
    }
    public function salvar(AlunoRequest $dados)
    {
            Aluno::create($dados->all());
            return redirect(route('aluno.list'));
    }
    public function deletar($dados)
    {
        Aluno::where('id_aluno',$dados)->delete();
        return redirect(route('aluno.list'));
    }
}
