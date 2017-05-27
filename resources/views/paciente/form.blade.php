@extends('layouts.app')

@section('conteudo')
    <form action="#" method="post">
        <div class="panel panel-primary">
            <div class="panel-heading" align="center">
                <h4>Cadastro de Pacientes</h4>
            </div>
            <div class="panel-body form-horizontal">

                {{--lado esquerdo da pagina--}}
                <div class="col-md-6">
                    <label for="nome" class="control-label col-md-2">Nome</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Nome" id="nome" name="nome" required class="form-control"/>
                    </div>
                        <label for="nome" class="control-label col-md-2">Nome</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Nome" id="nome" name="nome" required class="form-control"/>
                    </div>
                </div>



                {{--Lado direito da pagina--}}
                <div class="col-md-6">
                    <label for="telefone" class="control-label col-md-2">Telefone</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="(61) 3333-3333" id="telefone" name="telefone" required
                               class="form-control"/>
                    </div>
                    <label for="celular" class="control-label col-md-2">Celular</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="(61) 99999-9999" id="celular" name="celular" required
                               class="form-control"/>
                    </div>

                </div>





            </div>
            <div class="panel-footer" align="right">
                <h6>Produzido por Fábrica de Softwares Jr</h6>
            </div>
        </div>
    </form>
@endsection