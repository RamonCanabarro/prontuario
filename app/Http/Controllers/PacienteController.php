<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Http\Requests\PacienteRequest;

class PacienteController extends Controller
{
    public function form()
    {
        return view('paciente.form');
    }

    public function index()
    {
        $dados = Paciente::all();

        return view('paciente.index', compact('dados'));
    }

    public function salvar(PacienteRequest $dados)
    {
        Paciente::create($dados->all());
        return redirect(route('paciente.index'));
    }

    public function deletar($dados)
    {
        Paciente::where('id_paciente', $dados)->delete();
        return redirect(route('paciente.index'));
    }
    public function alterar(PacienteRequest $dados)
    {
        $dados = Paciente::where('id_paciente', $dados)->get();
        $dados = $dados[0];
//            print_r($dados);
//            die;
        return view('aluno.form', compact('dados'));
    }

}