@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <form>
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Triagem</div>

                        <div class="panel-body form-horizontal">
                            <div class="col-md-6">
                                <label for="queixa" class="control-label col-md-2">Queixa:</label>
                                <div class="col-md-10">
                                    <input type="text" id="queixa" name="queixa" class="form-control">
                                </div>

                                <label for="observacao" class="control-label col-md-2">Observação:</label>
                                <div class="col-md-10">
                                    <input type="text" id="observacao" name="observacao" class="form-control">
                                </div>
                                <fieldset>
                                    <legend>Necessidade atendimento:</legend>
                                    <div class="col-md-10">
                                        <input type="radio" id="01" name="gender" class="form-control"><label
                                                for="01"></label>
                                        <input type="radio" id="02" name="gender" class="form-control"><label
                                                for="02"></label>
                                        <input type="radio" id="01" name="gender" class="form-control"><label
                                                for="03"></label>
                                    </div>
                                </fieldset>
                                <label for="visto" class="control-label col-md-2">Visto:</label>
                                <div class="col-md-10">
                                    <input type="radio" id="01" name="gender" class="form-control">
                                </div>
                                <label for="recusa" class="control-label col-md-10"> Recusa</label>
                                <div class="col-md-10">
                                    <input type="radio" id="recusa" name="gender" class="form-control">
                                </div>
                                <label for="motivo" class="control-label col-md-2">Motivo</label>
                                <div class="col-md-10">
                                    <input type="text" id="motivo" name="motivo" class="form-control">
                                </div>
                                <label for="data" class="control-label col-md-2">Data da recusa</label>
                                <div class="col-md-10">
                                    <input type="text" id="data" name="data" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="responsavel" class="control-label col-md-2">Responsavel</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="responsavel" name="responsavel">
                                </div>
                                <div class="col-md-6">
                                    <label for="responsavel" class="control-label col-md-2">Responsavel</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="responsavel" name="responsavel">
                                    </div>
                                    <label for="familiar" class="control-label col-md-2">Alguem em sua residência estuda
                                        em escola ou faculdade
                                        partiular? </label>
                                    <div class="form-group col-md-2">
                                        <input type="radio" id="sim" name="gender"><label for="sim">Sim.</label>
                                        <input type="radio" id="nao" name="gender"><label for="sim">Não.</label>
                                        <label for="mensalidade">Se sim.Qual valor da mensalidade?</label>
                                        <input type="text" id="nao" name="mensalidade">
                                    </div>
                                    <label for="nPessoas" class="control-label col-md-2">Quantas pessoas moram na sua
                                        casa?</label>
                                    <div class="form-group col-md-10">
                                        <input type="number" id="nPessoas" name="nPessoas">
                                    </div>
                                    <label for="nTrabalham" class="control-label col-md-2">Quantos trabalham?</label>
                                    <div class="form-group">
                                        <input type="number" id="nTrabalham" name="nTrabalham">
                                    </div>
                                    <label for="tp_deficiencia" class="control-label col-md-2">Alguem de sua família tem
                                        alguma doença mental ou
                                        transtorno mental? </label>
                                    <div class="form-group col-md-10">
                                        <input type="radio" id="sim" name="gender"><label for="sim">Sim.</label>
                                        <input type="radio" id="nao" name="gender"><label for="sim">Não.</label>
                                    </div>
                                    <label for="tx_deficiencia" class="control-label col-md-2"></label>
                                    <div class="form-group col-md-10">
                                        <input type="text" id="tx_deficiencia" name="tx_deficiencia"
                                               class="form-control">
                                    </div>
                                    <label for="tp_acompanhamento_psic" class="control-label col-md-2">Você ou alguem da
                                        família faz acompanhamento psiquiátrico?</label>
                                    <div class="form-control">
                                        <input type="radio" id="sim" name="gender"><label for="sim">Sim.</label>
                                        <input type="radio" id="nao" name="gender"><label for="sim">Não.</label>
                                    </div>
                                    Se sim qual(is):
                                    <div class="form-control">
                                        <input type="checkbox" id="cigarro" name="gender"><label
                                                for="cigarro">Cigarro.</label>
                                        <input type="checkbox" id="alcool" name="gender"><label
                                                for="alcool">Álcool.</label>
                                        <input type="checkbox" id="craco" name="gender"><label
                                                for="crack">Crack.</label>
                                        <input type="checkbox" id="maconha" name="gender"><label
                                                for="maconha">Maconha.</label>
                                        <input type="checkbox" id="cocaina" name="gender"><label
                                                for="cocaina">Cocaina.</label>
                                    </div>
                                    <label for='tx_relatorio'>Relatório</label>
                                    <div class="col-md-6" align="left">
                                        <textarea rows="4" cols="30" class="form-control" name="queixa" id="queixa"
                                                  required
                                                  placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
