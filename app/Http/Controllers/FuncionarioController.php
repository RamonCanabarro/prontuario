<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;

class FuncionarioController extends Controller
{
    public function index()
    {
        $dados = Aluno::all();

        return view('funcionario.index', compact('dados'));
    }
    public function form()
    {
        return view('funcionario.form');
    }
    public function salvar(FuncionarioRequest $dados)
    {
        Aluno::create($dados->all());
        return redirect(route('funcionario.index'));
    }
    public function deletar($dados)
    {
        Aluno::where('id_supervisor',$dados)->delete();
        return redirect(route('funcionario.index'));
    }
}
