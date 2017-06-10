<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function listagem ()
    {
    $dados = Paciente::all();
        return view('paciente.list', compact('dados'));
    }
}
