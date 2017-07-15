<?php

namespace App\Http\Controllers;

use App\Doenca;
use App\Http\Requests\DoencaRequest;

class DoencaController extends Controller
{
    public function index()
    {
        $dados = Doenca::all();

        return view('doenca.index', compact('dados'));
    }

    public function form()
    {
        return view('doenca.form');

    }
    public function alterar($id)
    {
        $dados = Doenca::where('id_doenca_cronica', $id)->get();
        $dados = $dados[0];
//            print_r($dados);
//            die;
        return view('doenca.form', compact('dados'));
    }

    public function salvar(DoencaRequest $dados)
    {
        if ($dados['id_doenca_cronica']) {
            Doenca::find($dados['id_doenca_cronica'])->update($dados->all());
            return redirect(route('doenca.index'));
        } else {
            Doenca::create($dados->all());
            return redirect(route('doenca.index'));
        }
    }

    public function deletar($dados)
    {
        Doenca::where('id_doenca_cronica', $dados)->delete();
        return redirect(route('doenca.index'));
    }

}
