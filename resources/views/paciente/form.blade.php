@extends('layouts.app')

{{--@section('content')--}}
{{--<link type="text/css" rel="stylesheet" href="js/bootstrap/css/bootstrap.css"/>--}}
{{--<nav class="navbar navbar-inverse navbar-fixed-top">--}}
{{--<div class="container">--}}
{{--<div class="navbar-header">--}}
{{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"--}}
{{--aria-expanded="false" aria-controls="navbar">--}}
{{--<span class="sr-only">Toggle navigation</span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--</button>--}}
{{--<a class="navbar-brand" href="#">Cadastro</a>--}}
{{--</div>--}}
{{--<div id="navbar" class="navbar-collapse collapse">--}}
{{--<ul class="nav navbar-nav">--}}
{{--<li class="active"><a href="">Inicio</a></li>--}}
{{--<li><a href="">Triagem</a></li>--}}
{{--<li><a href=""></a></li>--}}
{{--<li><a href=""></a></li>--}}
{{--<li><a href=""></a></li>--}}
{{--</ul>--}}
{{--</div><!--/.nav-collapse -->--}}
{{--</div>--}}
{{--</nav>--}}
{{--<div class="container" style="margin-top: 60px;">--}}


{{--<table align="center" style="width:600px" border="0">--}}
{{--<tr>--}}
{{--<td style="font:12px verdana; color:#000">--}}


{{--<div class="panel panel-primary col-md-12">--}}
{{--<div class="panel panel-heading">Cadastro de pacientes</div>--}}


{{--<div class="row" align="center" >--}}
{{--<a type="submit" class="btn btn-danger" href="">Enviar</a>--}}
{{--<a type="submit" class="btn btn-danger">Cancelar</a>--}}
{{--</div>--}}

{{--</form>--}}
{{--</div>--}}

{{--</table>--}}
{{--</div>--}}
{{--@endsection--}}
x
@section('conteudo')
    <div class="row">
        <div class="col-md-11 panel panel-primary">
            <div class="panel-heading" align="center">
                <h4>Cadastro de pacientes</h4>
            </div>
            <div class="panel-body">
                    <div class="row">
                <label for="nome" class="col-sm-2">Nome:</label>
                        <input type="text" class="col-sm-4" id="nome" name="nome" placeholder="Ramon"
                               style="text-transform: uppercase"/>
                        <label for="sobrenome" class="col-sm-2">Sobrenome:</label>
                        <input type="text" class="col-sm-4" id="sobrenome" name="sobrenome" placeholder="Canabarro"
                               style="text-transform: uppercase"/>
                        </div>
                <div class="row">
                    <label for="email" class="col-sm-2">E-mail</label>
                    <input type="email" id="email" name="email" class="col-sm-4" placeholder="Exemplo@hotmail.com" style="text-transform: uppercase"/>

                    <label for="cel" class="col-sm-2">Celular:</label>
                    <input type="tel" id="cel" name="cel" class="col-sm-4" placeholder="(00) 0000-0000" style="text-transform: uppercase">
                </div>
                <div class="row">
                    <label for="tel" class="col-sm-2">Telefone:</label>
                    <input type="tel" id="tel" name="tel" class="col-sm-4" placeholder="(00) 0000-0000" style="text-transform: uppercase">

                    <label for="rg" class="col-sm-2">RG:</label>
                    <input type="number" id="rg" name="rg" class="col-sm-4" placeholder="000.000.000-00" style="text-transform: uppercase">
                    </div>

                <div class="row">
                    <label for="cpf" class="col-sm-2">CPF: </label>
                    <input pattern="" type="number" id="cpf" name="cpf" class="col-sm-4" placeholder="0.000.000" style="text-transform: uppercase">

                    <label for="cep" class="col-sm-2">CEP:</label>
                    <input type="number" id="cep" name="cep" class="col-sm-4" placeholder="00000-000" style="text-transform: uppercase">
                </div>

                <div class="row">
                    <label for="nasci" class="col-sm-2">Nascimento:</label>
                    <input type="date" name="nasci" id="nasci" class="col-sm-4" style="text-transform: uppercase">

                    <label for="endereco" class="col-sm-2">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" class="col-sm-4" placeholder="Endereço" style="text-transform: uppercase"/>

                </div>
                    </div>
                <div class="row">
                    <label for="estado" class="col-sm-2">Estado civil:</label>
                    <select id="estado" class="col-md-4">
                        <option>Selecione</option>
                        <option>Solteiro(a)</option>
                        <option>Casado(a)</option>
                        <option>Divorciado(a)</option>
                    </select>

                        <label for="cor" class="col-md-2">Cor/Raça:</label>
                        <select id="cor" class="col-md-4">
                            <option>Selecione</option>
                            <option>Branco</option>
                            <option>Negro</option>
                            <option>Pardo</option>
                        </select>
          </div>


                {{----}}
                    {{--<div class="form-group">--}}
                        {{--<label for="endereco">Endereco:</label><textarea rows="1" cols="10"--}}
                                                                         {{--class="form-control"--}}
                                                                         {{--type="text" name="address"--}}
                                                                         {{--id="endereco"--}}
                                                                         {{--placeholder="Endereço"></textarea><br>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="cidade">Cidade:</label><textarea rows="1" cols="10" class="form-control"--}}
                                                                     {{--type="text" name="cidade1" id="cidade"--}}
                                                                     {{--placeholder="Cidade"></textarea><br>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="bairro">Bairro:</label><textarea rows="1" cols="10" class="form-control"--}}
                                                                     {{--type="text" name="bairro" id="bairro"--}}
                                                                     {{--placeholder="Bairro"></textarea><br>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="cep">CEP:</label><input rows="1" cols="10" class="form-control"--}}
                                                            {{--type="number" name="cep" id="cep"--}}
                                                            {{--placeholder="Cep"><br>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="cpf">CPF:</label><input rows="1" cols="10" class="form-control"--}}
                                                            {{--type="number" name="cpf" id="cpf"--}}
                                                            {{--placeholder="CPF"><br>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="rg">RG:</label><input rows="1" cols="10" class="form-control"--}}
                                                          {{--type="number"--}}
                                                          {{--name="rg" id="rg" placeholder="RG"><br>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="uf">UF:</label><select name="uf" id="uf">--}}
                            {{--<option>Selecione</option>--}}
                            {{--<option>DF</option>--}}
                            {{--<option>GO</option>--}}
                        {{--</select><br>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="telefone">Telefone:</label><input rows="1" cols="10"--}}
                                                                      {{--class="form-control"--}}
                                                                      {{--type="number" name="telefone"--}}
                                                                      {{--id="telefone" placeholder="Telefone">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="celular">Celular:</label><input rows="1" cols="10" class="form-control"--}}
                                                                    {{--type="number" name="celular"--}}
                                                                    {{--id="celular"--}}
                                                                    {{--placeholder="Celular"><br>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="email">E-mail:</label><textarea rows="1" cols="10" class="form-control"--}}
                                                                    {{--type="text" name="email" id="email"--}}
                                                                    {{--placeholder="E-mail"></textarea><br>--}}
                    {{--</div>--}}
                    {{--Sexo:<input type="radio" name="gender" id="mascu"><label for="mascu">Masculino</label>--}}
                    {{--<input type="radio" name="gender" id="fem"><label for="fem">Feminino</label><br>--}}

                    {{--<fieldset>--}}
                        {{--<label for="estado">Estado Civil:</label><select name="estado" id="estado">--}}
                            {{--<option>Selecione</option>--}}
                            {{--<option>Casado(a)</option>--}}
                            {{--<option>Divorciado(a)</option>--}}
                            {{--<option>Solteiro(a)</option>--}}
                            {{--<option>Uni�o Estavel</option>--}}
                            {{--<option>Vi�vo(a)</option>--}}
                        {{--</select><br><br>--}}

                        {{--<label for="raca">Cor/Raça:</label><select name="raca" id="raca">--}}
                            {{--<option>Selecione</option>--}}
                            {{--<option>Amarela</option>--}}
                            {{--<option>Branca</option>--}}
                            {{--<option>Indigena</option>--}}
                            {{--<option>Parda</option>--}}
                            {{--<option>Preta</option>--}}
                        {{--</select><br>--}}
                    {{--</fieldset>--}}

            </div>
        <div class="panel-footer">
            <div class="col-md-3" align="center">
                <submit type="button" class="btn btn-primary" class="form-control">Salvar</submit>
                <submit type="button" class="btn btn-primary" class="form-control">Voltar</submit>
            </div>

        </div>
        </div>
    </div>
@endsection