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
                    <label for="cpf" class="control-label col-md-2">CPF:</label>
                    <div class="col-md-10">
                        <input type="number" placeholder="Cpf" id="cpf" name="cpf" required class="form-control"/>
                    </div>
                    <label for="rg" class="control-label col-md-2">RG:</label>
                    <div class="col-md-10">
                        <input type="number" placeholder="Rg" id="rg" name="rg" required class="form-control"/>
                    </div>
                    <label for="email" class="control-label col-md-2">E-mail:</label>
                    <div class="col-md-10">
                        <input type="email" placeholder="E-mail" id="email" name="email" required class="form-control"/>
                    </div>
                    <label for="nascimento" class="control-label col-md-2">Nascimento:</label>
                    <div class="col-md-10">
                        <input type="date" placeholder="" id="nascimento" name="nascimento" required class="form-control"/>
                    </div>
                    <label for="estado" class="control-label col-md-2">Estado civil:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Estado civil" id="estado" name="estado" required class="form-control"/>
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
                    <label for="cep" class="control-label col-md-2">CEP:</label>
                    <div class="col-md-10">
                        <input type="number" placeholder="Cep" id="cep" name="cep" required class="form-control"/>
                    </div>
                    <label for="endereco" class="control-label col-md-2">Endereço:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Endereço" id="endereco" name="endereco" required class="form-control"/>
                    </div>
                    <label for="raca" class="control-label col-md-2">Raça:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Raça" id="raca" name="raca" required class="form-control"/>
                    </div>

                </div>


            </div>

            <div class="panel-footer" align="center">
              <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>
              <button type="reset" value="Cancelar" class="btn btn-primary">Cancelar</button>
            </div>
    </form>
@endsection