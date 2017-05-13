<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriagemController extends Controller
{
    public function index()
    {
        $nome = 'ricardo';
        return view('triagem.index', compact('nome'));
    }
    public function form()
    {
        $nome = 'Thiago';
        return view('triagem.form', compact('nome'));
    }
}
