@extends('templates/principal')
@section('conteudo')


    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div>
                    <div class="panel-heading" align="center">
            Listam de pacientes
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <tr>
                    <th>Ações</th>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>email</th>
                    <th>data</th>
                </tr>
                @foreach($dados as $dado)

                <tr>
                    <td>		<a class="waves-effect waves-light" href="paciente/alterar"><i
                                    class="material-icons left">mode_edit</i></a>

                        <a href="paciente/deletar/{{$dado['id']}}"><i
                                    class="material-icons left red-text">delete</i></a>

                    </td>
                    <td>{{$dado['id']}}</td>
                    <td>{{$dado['name']}}</td>
                    <td>{{ $dado['email']}}</td>
                    <td>{{ $dado['created_at']}}</td>

         </tr>
                @endforeach;

            </table>
        </div>
        <div class="right-align">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('paciente.form')}}"><i
                        class="material-icons">add</i></a>
        </div>
        <div class="panel-footer">
            <h6>Produzido por Fábrica de Softwares Jr.</h6>
        </div>
    </div>
                </div></div></div></div>
@endsection