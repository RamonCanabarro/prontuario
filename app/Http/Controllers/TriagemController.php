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
    public function alterar($id)
    {
        $dados = Triagem::where('id_triagem', $id)->get();
        $dados = $dados[0];
//            print_r($dados);
//            die;
        return view('triagem.form', compact('dados'));
    }

    public function salvar(TriagemRequest $dados)
    {
        if ($dados['id_triagem']) {
        Triagem::find($dados['id_triagem'])->update($dados->all());
        return redirect(route('triagem.index'));
    } else {
        Triagem::create($dados->all());
        return redirect(route('triagem.index'));
    }
    }
    public function deletar($dados)
    {
        Triagem::where('id_triagem',$dados)->delete();
        return redirect(route('triagem.index'));
    }

}

