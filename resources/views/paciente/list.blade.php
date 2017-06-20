@extends('templates/principal')
@section('conteudo')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <div class="panel panel-primary">

        <div class="panel-heading" align="center">
            Listam de pacientes
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <tr>
                    <th>Ações</th>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                </tr>
                @foreach($dados as $dado)

                <tr>
                    <td>
                        <i class="tiny material-icons">mode_edit</i>
                        <i class="tiny material-icons">delete</i>
                    </td>
                    <td>{{$dado['id_aluno']}}</td>
                    <td>{{ $dado['tx_nome']}}</td>
                    <td>{{ $dado['nu_fone']}}</td>

                    <?php echo '<pre>';
                   print_r($dados);
                   echo '</pre>';
                   ?>
                </tr>
                @endforeach;

            </table>
        </div>
        <div class="panel-footer">
            <h6>Produzido por Fábrica de Softwares Jr.</h6>
        </div>
    </div>
@endsection