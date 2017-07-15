<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Supervisor;
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
        //Recebe dados do supervisor
        $supervisores = Supervisor:: all();
        return view('aluno.form', compact('supervisores'));

    }
    public function alterar($id)
    {
        $dados = Aluno::where('id_aluno', $id)->get();
        $supervisores = Supervisor:: all();
        $dados = $dados[0];
//            print_r($dados);
//            die;
        return view('aluno.form', compact('dados', 'supervisores'));
    }

    public function salvar(AlunoRequest $dados)
    {
        if ($dados['id_aluno']) {
            Aluno::find($dados['id_aluno'])->update($dados->all());
            \Session::flash('mensagem', ['msg'=>'Aluno Salvo com sucesso!', 'class'=>'green white-text']);
            return redirect(route('aluno.index'));
        } else {
            Aluno::create($dados->all());
            \Session::flash('mensagem', ['msg'=>'Aluno Salvo com sucesso!', 'class'=>'grenn']);
            return redirect(route('aluno.index'));
        }

    }

    public function deletar($dados)
    {
        Aluno::where('id_aluno', $dados)->delete();
        return redirect(route('aluno.index'));
    }
}
