<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $dados = Aluno::all();

        return view('aluno.list', compact('dados'));
    }
    public function form()
    {
            return view('aluno.form');
    }
}
