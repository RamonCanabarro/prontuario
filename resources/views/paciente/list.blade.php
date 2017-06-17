@extends('layouts.app')
@section('conteudo')
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
                <tr>
                    <td>Jill</td>
                    <td>Smith</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Eve</td>
                    <td>Jackson</td>
                    <td>94</td>
                </tr>
            </table>
        </div>
        <div class="panel-footer">
            <h6>Produzido por Fábrica de Softwares Jr.</h6>
        </div>
    </div>
@endsection