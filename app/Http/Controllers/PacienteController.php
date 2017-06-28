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
        if ($dados['id_paciente']) {
            Paciente::find($dados['id_paciente'])->update($dados->all());
            return redirect(route('paciente.index'));
        } else {
            Paciente::create($dados->all());
            return redirect(route('paciente.index'));
        }
    }

    public function alterar($id)
    {
        $dados = Paciente::where('id_paciente', $id)->get();
        $dados = $dados[0];
//            print_r($dados);
//            die;
        return view('paciente.form', compact('dados'));
    }

    public function deletar($dados)
    {
        Paciente::where('id_paciente', $dados)->delete();
        return redirect(route('paciente.index'));
    }

}