@extends('templates/principal')

@section('conteudo')

    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div>
                        <h4 class="grey-text" align="center">Lista de Supervisores</h4>
                    </div>
                    <table class="striped bordered">
                        <thead>
                        <tr>
                            <th>Ação</th>
                            <th>Codigo</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dados as $dado)
                            <tr>
                                <td>

                                    <a class="waves-effect waves-light" href="supervisor/alterar/{{$dado['id_supervisor']}}"><i
                                                class="material-icons left">mode_edit</i></a>
                                    <a href="supervisor/deletar/{{$dado['id_supervisor']}}"><i
                                                class="material-icons left red-text" onclick="return confirm('Tem certeza que deseja deletar?')">delete</i></a>
                                </td>
                                <td>{{$dado['nu_codigo']}}</td>
                                <td>{{$dado['tx_nome']}}</td>
                                <td>{{$dado['nu_fone']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="right-align">
                    <a class="btn-floating btn-large waves-effect waves-light" href="{{route('supervisor.form')}}"><i
                                class="material-icons">add</i></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function EventAlert(){
            swal({
                    title: "Deseja deletar?",
                    text: "Não podera recuperar esse arquivo novamente!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Sim, apagar!",
                    cancelButtonText: "Não, cancele por favor!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        swal("Deletado!", "Supervisor deletado.", "success");
                    } else {
                        swal("Cancelled", "Cancelado :)", "error");
                    }
                });
        }
    </script>
@endsection