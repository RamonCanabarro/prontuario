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
    public function list()
    {
        $dados = Paciente::all();

        return view('paciente.list', compact('dados'));
    }
}
