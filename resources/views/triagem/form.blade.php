{{--@extends('layouts.app')--}}
<!-- created by: Thiago !-->
<!-- date: 07/05/2017 !-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<center>
    <form method="POST" action="list.php">
        <div class="panel panel-primary">
            <div class="panel-heading" align="center">
                <h4>Triagem</h4>
            </div>
            <div class="panel-body form-horizontal">
                <div class="col-md-10">

                    <div class="col-md-1"></div> <!-- borda esquerda !-->
                    <div class="col-md-10"> <!-- conteudo centralizado em 10 colunas !-->
                        <div class="form-group">

                            <div class="row">
                                <div class="col-md-3" align="left">
                                    <label for='data'>Data</label>
                                    <input type="date" class="form-control" name="data" id="data" required>
                                </div>

                                <div class="col-md-5" align="left">
                                    Necessidade atendimento:
                                    <div>
                                        <input type="radio" id="urgente2" name="tp_necessidade_atendimento" class=""><label
                                                for="urgente2">Pouca urgência</label></div>
                                    <div>
                                        <input type="radio" id="urgente3" name="tp_necessidade_atendimento" class=""><label
                                                for="urgente3">Urgência</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="urgente4" name="tp_necessidade_atendimento" class=""><label
                                                for="urgente4">Muita urgência</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="urgente5" name="tp_necessidade_atendimento" class=""><label
                                                for="urgente5">Emergência</label>
                                    </div>
                                </div>

                                <div class="col-md-4" align="left">
                                    <label for='tp_visto_supervisor'>Supervisor responsável</label>
                                    <input type="text" class="form-control" name="tp_visto_supervisor" id="tp_visto_supervisor" required>
                                </div>

                            </div> <!-- primeira row !--> <br>

                            <div class="row">
                                <div class="col-md-8" align="left">
                                    <label for='tx_nome'>Nome do paciente</label>
                                    <input type="text" class="form-control" name="tx_nome" id="tx_nome" required>
                                </div>
                                <div class="col-md-4" align="left">
                                    <label for='idade'>Idade</label>
                                    <input type="number" class="form-control" name="idade" id="idade" required>
                                </div>

                                <div class="col-md-8">
                                    <label for="tx_nome_responsavel" class="control-label col-md-2">Responsavel</label>
                                    <input type="text" class="form-control" id="tx_nome_responsavel" name="tx_nome_responsavel">
                                </div>
                            </div> <!-- segunda row !--> <br>

                            <div class="row">
                                <div class="col-md-6" align="left">
                                    <label for="atendimento">Tipos de atendimento</label>
                                    <div><b>Individual:</b>
                                        <label class="radio-inline" for="individualCrianca">
                                            <input type="radio" name="tp_grupo" id="individualCrianca"
                                                   value="individualCrianca">
                                            Criança
                                        </label>
                                        <label class="radio-inline" for="individualAdolescente">
                                            <input type="radio" name="tp_grupo" id="individualAdolescente"
                                                   value="individualAdolescente">
                                            Adolescente
                                        </label>
                                        <label class="radio-inline" for="individualAdulto">
                                            <input type="radio" name="tp_grupo" id="individualAdulto"
                                                   value="individualAdulto" checked="checked">
                                            Adulto
                                        </label>
                                        <label class="radio-inline" for="individualIdoso">
                                            <input type="radio" name="tp_grupo" id="individualIdoso"
                                                   value="individualIdoso">
                                            Idoso
                                        </label>
                                    </div>

                                    <div><b>Grupo:</b>
                                        <label class="radio-inline" for="grupoCrianca">
                                            <input type="radio" name="tp_grupo" id="grupoCrianca"
                                                   value="grupoCrianca">
                                            Criança
                                        </label>
                                        <label class="radio-inline" for="grupoAdolescente">
                                            <input type="radio" name="tp_grupo" id="grupoAdolescente"
                                                   value="grupoAdolescente">
                                            Adolescente
                                        </label>
                                        <label class="radio-inline" for="grupoMulher">
                                            <input type="radio" name="tp_grupo" id="grupoMulher" value="grupoMulher">
                                            Adulto
                                        </label>
                                        <label class="radio-inline" for="grupoHomem">
                                            <input type="radio" name="tp_grupo" id="grupoHomem" value="grupoHomem">
                                            Idoso
                                        </label>
                                        <label class="radio-inline" for="grupoEducacaoFamiliar">
                                            <input type="radio" name="tp_grupo" id="grupoEducacaoFamiliar"
                                                   value="grupoEducacaoFamiliar">
                                            Idoso
                                        </label>
                                        <label class="radio-inline" for="grupoDrogadicao">
                                            <input type="radio" name="tp_grupo" id="grupoDrogadicao"
                                                   value="grupoDrogadicao">
                                            Idoso
                                        </label>
                                    </div>

                                    <div><b>Temporário:</b>
                                        <label class="radio-inline" for="temporarioCasal">
                                            <input type="radio" name="tp_grupo" id="temporarioCasal"
                                                   value="temporarioCasal">
                                            Criança
                                        </label>
                                        <label class="radio-inline" for="temporarioFamiliar">
                                            <input type="radio" name="tp_grupo" id="temporarioFamiliar"
                                                   value="temporarioFamiliar">
                                            Adolescente
                                        </label>
                                        <label class="radio-inline" for="adulto">
                                            <input type="radio" name="tp_grupo" id="adulto" value="adulto">
                                            Adulto
                                        </label>
                                    </div>
                                </div>
                            </div> <!-- row dos radios !--> <br>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <label for='queixa'>Queixa principal</label>
                                    <textarea rows="4" cols="50" class="form-control" name="tx_queixa" id="queixa" required
                                              placeholder="Escreva o motivo da solicitação do atendimento utilizando ao máximo as palavras do paciente"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-10" align="left">
                                    <div class="col-md-2" align="left">
                                        <label for="tp_recusa" class="control-label">Recusa:</label>
                                        <input type="radio" id="tp_recusa" name="tp_recusa" class="">
                                    </div>
                                    <div class="col-md-4" align="left">
                                        <label for="motivo" class="control-label">Motivo</label>
                                        <input type="text" id="motivo" name="tx_motivo_recusa" class="form-control">
                                    </div>
                                    <div class=" col-md-6" align="left">
                                        <label for="dtRecusa" class="control-label">Dt. recusa</label>
                                        <input type="date" id="dtRecusa" name="dt_recusa" class="form-control">
                                    </div>

                                </div>
                            </div> <!-- terceira row !--> <br>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <div class="col-md-10 " align="">
                                        <label for="familiar" class="control-label">Alguem em sua residência estuda
                                            em escola ou faculdade
                                            partiular? </label>
                                        <div>
                                            <input type="radio" id="sim" name="tp_familia"><label for="sim">Sim.</label>
                                        </div>
                                        <div><input type="radio" id="nao" name="tp_familia"><label for="nao">Não.</label>
                                        </div>
                                    </div>

                                    <label for="mensalidade" class=" col-md-10">Se sim. Qual o valor da
                                        mensalidade?</label>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="" id="mensalidade" name="nu_mensalidade" required
                                               class="form-control"/>
                                    </div>

                                    <label for="nPessoas" class="col-md-10">Quantas pessoas moram na sua
                                        casa?</label>
                                    <div class="col-md-6">
                                        <input type="number" id="nPessoas" class="form-control" name="nu_qtd_pessoa">
                                    </div>

                                    <label for="nTrabalham" class="col-md-10">Quantos trabalham?</label>
                                    <div class="col-md-6">
                                        <input type="number" id="nTrabalham" class="form-control" name="nu_qtd_trabalha">
                                    </div>

                                    <label for="tp_deficiencia" class="col-md-10">Alguem de sua família tem
                                        alguma doença mental ou
                                        transtorno mental? </label>
                                    <div class="col-md-6">
                                        <input type="radio" id="tp_deficiencia_sim" name="tp_deficiencia"><label for="tp_deficiencia_sim">Sim.</label>
                                        <input type="radio" id="tp_deficiencia_nao" name="tp_deficiencia"><label for="tp_deficiencia_nao">Não.</label>
                                    </div>
                                    <label for="tx_deficiencia" class="col-md-10">Se sim. Qual?</label>
                                    <div class="col-md-6">
                                        <input type="text" id="tx_deficiencia" name="tx_deficiencia"
                                               class="form-control">
                                    </div>


                                    <label for="tp_acompanhamento_psic" class="col-md-10">Você ou alguem da
                                        família faz acompanhamento psiquiátrico?</label>
                                    <div class="col-md-4">
                                        <input type="radio" id="sim" name="gender"><label for="sim">Sim.</label>
                                        <input type="radio" id="nao" name="gender"><label for="nao">Não.</label>
                                    </div>

                                    <label for="tp_drogas" class="col-md-10">Se sim qual(is):</label>
                                    <div class="col-md-6">
                                        <input type="checkbox" id="cigarro" name="tp_drogas"><label
                                                for="cigarro">Cigarro.</label>
                                        <input type="checkbox" id="alcool" name="tp_drogas"><label
                                                for="alcool">Álcool.</label>
                                        <input type="checkbox" id="craco" name="tp_drogas"><label
                                                for="crack">Crack.</label>
                                        <input type="checkbox" id="maconha" name="tp_drogas"><label
                                                for="maconha">Maconha.</label>
                                        <input type="checkbox" id="cocaina" name="tp_drogas"><label
                                                for="cocaina">Cocaina.</label>

                                    </div><!-- quarta row !-->
                                    <div class="col-md-12" align="left">
                                        <label for='observacao'>Observação:</label>
                                        <textarea rows="4" cols="50" class="form-control" name="observacao" id="observacao" required
                                                  placeholder=""></textarea>
                                    </div>
                                </div>

                                <div align="center">
                                    <input type="button" class="btn btn-primary" value="Enviar">
                                    <input type="reset" class="btn btn-danger" value="Cancelar">
                                </div>

                            </div> <!-- form groups !-->
                        </div> <!-- conteudo centralizado em 10 colunas !-->
                    </div>
                </div>
            </div>
        </div>
    </form>
</center>

