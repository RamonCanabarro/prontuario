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
        Aluno::create($dados->all());
        return redirect(route('paciente.list'));
    }
    public function deletar($dados)
    {
        Aluno::where('id_paciente',$dados)->delete();
        return redirect(route('paciente.list'));
    }

}
