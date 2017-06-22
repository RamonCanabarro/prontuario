<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Supervisor;

class SupervisorController extends Controller
{
    public function index()
    {
        $dados = Supervisor::all();

        return view('supervisor.index', compact('dados'));
    }
    public function form()
    {
        return view('supervisor.form');
    }
    public function salvar(FuncionarioRequest $dados)
    {
        Supervisor::create($dados->all());
        return redirect(route('supervisor.index'));
    }
    public function deletar($dados)
    {
        Supervisor::where('id_supervisor',$dados)->delete();
        return redirect(route('supervisor.index'));
    }
}
