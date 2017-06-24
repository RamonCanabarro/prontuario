<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

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
    public function alterar($dados)
    {
        Paciente::insert('id_paciente', $dados)->updated();
        return redirect(route('paciente.form'));
    }
}