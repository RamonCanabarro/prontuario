<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupervisorRequest;
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
        $dados = Supervisor::all();
        return view('supervisor.form', compact('dados'));
    }

    public function alterar($id)
    {
        $dados = Supervisor::where('id_supervisor', $id)->get();
        $dados = $dados[0];
//            print_r($dados);
//            die;
        return view('supervisor.form', compact('dados'));
    }


    public function salvar(SupervisorRequest $dados)
    {
        if ($dados['id_supervisor']) {
            Supervisor::find($dados['id_supervisor'])->update($dados->all());
            return redirect(route('supervisor.index'));
        } else {
            Supervisor::create($dados->all());
            return redirect(route('supervisor.index'));

        }

    }


    public function deletar($dados)
    {
        Supervisor::where('id_supervisor', $dados)->delete();
        return redirect(route('supervisor.index'));

    }
}


?>

<script>
    function EventAlert(){
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false
        }).then(function () {
            swal(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }, function (dismiss) {
            // dismiss can be 'cancel', 'overlay',
            // 'close', and 'timer'
            if (dismiss === 'cancel') {
                swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }
</script>
