<?php

namespace App\Http\Controllers;

use App\Triagem;
use Illuminate\Http\Request;

class TriagemController extends Controller
{
    public function form()
    {
        return view('triagem.form');
    }
    public function index()
    {
        $dados = Triagem::all();

        return view('triagem.list', compact('dados'));
    }
}

