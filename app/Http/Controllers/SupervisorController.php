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

    public function form($id)
    {
        if (!$id) {
            return view('supervisor.form');
        } else {
            $dados = Supervisor::where('id_supervisor', $id)->get();
            $dados = $dados[0];
//           echo '<pre>';
//           print_r($dados[0]);
//           die;
            return view('supervisor.form', compact('dados'));
        }
    }

    public function salvar(FuncionarioRequest $dados)
    {
//        echo '<pre>';
//        print_r($dados['id_supervisor']);
//        die;
        if (!$dados['id_supervisor'])
        {
            Supervisor::create($dados->all());
            return redirect(route('supervisor.index'));
            }
        else
        {
            Supervisor::where('id_supervisor', $dados['id_supervisor'])->update($dados->all());
            return redirect(route('supervisor.index'));
        }

    }

    public function deletar($dados)
    {
        Supervisor::where('id_supervisor', $dados)->delete();
        return redirect(route('supervisor.index'));
    }
}
