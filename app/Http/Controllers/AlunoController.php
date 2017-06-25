<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Http\Requests\AlunoRequest;

class AlunoController extends Controller
{
    public function index()
    {
        $dados = Aluno::all();

        return view('aluno.index', compact('dados'));
    }

    public function incluir()
    {
        return view('aluno.form');

    }
    public function alterar($id)
    {
        $dados = Aluno::where('id_aluno', $id)->get();
        $dados = $dados[0];
//            print_r($dados);
//            die;
        return view('aluno.form', compact('dados'));
    }

    public function salvar(AlunoRequest $dados)
    {
        if ($dados['id_aluno']) {
            Aluno::find($dados['id_aluno'])->update($dados->all());
            return redirect(route('aluno.index'));
        } else {
            Aluno::create($dados->all());
            return redirect(route('aluno.index'));
        }
    }

    public function deletar($dados)
    {
        Aluno::where('id_aluno', $dados)->delete();
        return redirect(route('aluno.index'));
    }
}
