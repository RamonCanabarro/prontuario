{{--@extends('layouts.app')--}}
<!-- created by: Thiago !-->
<!-- date: 07/05/2017 !-->
@if(!empty($dados))
    {{$dados}}
    <div class="row">
        <div class="row">
            <div class="card">
                <div class="card-content">
                    <div align="center">
                        <h4>Lista de triagem</h4>
                    </div>

                    <form method="post" action={{route('triagem.salvar')}}>
                        {{ csrf_field() }}
                        <div class="input-field col s12">
                            <b>Necessidade atendimento:</b>
                            <p>
                                <input type="radio" id="normal" name="tp_necessidade_atendimento" class=""><label
                                        for="normal" value="N">Normal</label>
                                <input type="radio" id="urgente" name="tp_necessidade_atendimento" class=""><label
                                        for="urgente" value="U">Urgente</label>
                            </p>
                        </div>
                        <div class="input-field col s3">
                            <label for="tx_nome" class="active">Nome do paciente</label>
                            <input type="text" class="form-control" name="tx_nome" id="tx_nome" required>
                        </div>

                        <div class="input-field col s3">
                            <label for="tx_nome_responsavel" class="active">Responsavel</label>
                            <input type="text" class="form-control" id="tx_nome_responsavel"
                                   name="tx_nome_responsavel">
                        </div>

                        <div class="input-field col s6">
                            <label for="supervisor">Supervisor responsável</label>
                            <input type="text" class="form-control" name="fk_supervisor"
                                   id="supervisor" required>
                        </div>
                        <div class="input-field col s10">
                            <label for="activate"><b>Tipos de atendimento</b></label>
                            <p>
                                <input type="radio" name="tp_grupo" id="Crinaça"
                                       value="Crinaça">
                                <label class="active" for="Crinaça">Criança</label>

                                <input type="radio" name="tp_grupo" id="Adolescente"
                                       value="Adolescente">
                                <label class="active" for="Adolescente">Adolescente</label>

                                <input type="radio" name="tp_grupo" id="Adulto"
                                       value="Adulto" checked="checked">
                                <label class="active" for="Adulto">Adulto</label>

                                <input type="radio" name="tp_grupo" id="Idoso"
                                       value="Idoso">
                                <label class="active" for="Idoso">Idoso</label>
                            </p>
                        </div>

                        <div class="input-field col s6" align="left">
                            <label for='queixa' class="active">Queixa principal:</label>
                            <textarea rows="50" cols="80" class="validate" name="tx_queixa" id="queixa" required
                                      placeholder="Escreva o motivo da solicitação do atendimento utilizando ao máximo as palavras do paciente"></textarea>
                        </div>
                        <div class="input-field col s6">
                            <label for="tp_recusa" class="active">Recusa:</label>
                            <input type="radio" id="caso" class="validate" value="C" name="tp_recusa">
                            <label for="caso">Caso encerrado.</label>
                            <input type="radio" id="encaminhamento" class="validate" value="E" name="tp_recusa">
                            <label for="encaminhamento">Encaminhamento externo.</label>
                        </div>
                        <div class="input-field col s3">
                            <label for="motivo" class="control-label">Motivo</label>
                            <input type="text" id="motivo" name="tx_motivo_recusa" class="form-control">
                        </div>
                        <div class="input-field col s3" align="left">
                            <label for="dtRecusa" class="active">Dt. recusa</label>
                            <input type="date" id="dtRecusa" name="dt_recusa" class="validate">
                        </div>


                        <div class="row">
                            <div class="input-field col s4" align="left">
                                <label for="familiar" class="active">Alguem em sua residência estuda
                                    em escola ou faculdade
                                    partiular? </label>
                                <input type="radio" id="sim" name="tp_familia"><label for="sim">Sim.</label>
                                <input type="radio" id="nao" name="tp_familia"><label for="nao">Não.</label>
                            </div>
                        </div>

                        <div class="input-field col s4">
                            <input type="text" id="mensalidade" name="nu_mensalidade" required
                                   class="validate"/>
                            <label for="mensalidade" class="active">Se sim. Qual o valor da
                                mensalidade?</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="number" id="nPessoas" class="validate" required name="nu_qtd_pessoa">
                            <label for="nPessoas" class="active">Quantas pessoas moram na sua
                                casa?</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="number" id="nTrabalham" class="validate" name="nu_qtd_trabalha">
                            <label for="nTrabalham" class="active">Quantos trabalham?</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="radio" id="tp_deficiencia_sim" class="validate"
                                   name="tp_deficiencia" value="S"><label for="tp_deficiencia_sim">Sim.</label>
                            <input type="radio" id="tp_deficiencia_nao" class="validate"
                                   name="tp_deficiencia" value="N"><label for="tp_deficiencia_nao">Não.</label>
                            <label for="tp_deficiencia" class="active">Alguem de sua família tem
                                alguma doença mental ou
                                transtorno mental? </label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" id="tx_deficiencia" name="tx_deficiencia"
                                   class="validate">
                            <label for="tx_deficiencia" class="active">Se sim. Qual?</label>
                        </div>


                        <div class="input-field col s4">
                            <input type="radio" id="sim3" name="tp_acompanhamento_psic"><label
                                    for="sim3">Sim.</label>
                            <input type="radio" id="nao3" name="tp_acompanhamento_psic"><label
                                    for="nao3">Não.</label>
                            <label for="tp_acompanhamento_psic" class="active">Você ou alguem da
                                família faz acompanhamento psiquiátrico?</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" class="validate" id="tx_local_acompanhamento"
                                   name="tx_local_acompanhamento">
                            <label class="active" for="tx_local_acompanhamento">Local do acompanhamento</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="radio" id="sim2" name="tp_drogas"><label
                                    for="sim2" value="s">Sim.</label>
                            <input type="radio" id="nao2" name="tp_drogas"><label
                                    for="nao2" value="n">Não.</label>
                            <label for="tp_acompanhamento_psic" class="active">Você é usuário de drogas?</label>
                        </div>

                        {{--Tipos de drogas--}}
                        {{--<div class="input-field col s4">--}}
                        {{--<input type="checkbox" id="cigarro" name="tp_drogas"><label--}}
                        {{--for="cigarro" value="C">Cigarro.</label>--}}
                        {{--<input type="checkbox" id="alcool" name="tp_drogas"><label--}}
                        {{--for="alcool" value="A">Álcool.</label>--}}
                        {{--<input type="checkbox" id="crack" name="tp_drogas"><label--}}
                        {{--for="crack" value="c">Crack.</label>--}}
                        {{--<input type="checkbox" id="maconha" name="tp_drogas"><label--}}
                        {{--for="maconha" value="M">Maconha.</label>--}}
                        {{--<input type="checkbox" id="cocaina" name="tp_drogas"><label--}}
                        {{--for="cocaina">Cocaina.</label>--}}
                        {{--<label for="tp_drogas" class="active">Se sim qual(is):</label>--}}
                        {{--</div><!-- quarta row !-->--}}

                        <div class="input-field col s4" align="left">
                            <label for='observacao' class="active">Observação:</label>
                            <textarea rows="4" cols="50" class="validate" name="observacao" id="observacao"
                                      required
                                      placeholder=""></textarea>
                        </div>
                        <div class="panel-footer" align="center">
                            <input type="submit" name="Enviar" class="btn btn-success">
                            <a type="reset" value="Cancelar" href="{{route('triagem.index')}}" class="btn btn-warning">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    </div>
@else
    @extends('templates/principal')
    <!-- Adicionando Javascript -->
@section('conteudo')

    <div class="row">
        <div class="row">
            <div class="card">
                <div class="card-content">
                    <div align="center">
                        <h4>Lista de triagem</h4>
                    </div>

                    <form method="post" action={{route('triagem.salvar')}}>
                        {{ csrf_field() }}
                        <div class="input-field col s12">
                            <b>Necessidade atendimento:</b>
                            <p>
                                <input type="radio" id="normal" name="tp_necessidade_atendimento" class=""><label
                                        for="normal" value="N">Normal</label>
                                <input type="radio" id="urgente" name="tp_necessidade_atendimento" class=""><label
                                        for="urgente" value="U">Urgente</label>
                            </p>
                        </div>
                        <div class="input-field col s3">
                            <label for="tx_nome" class="active">Nome do paciente</label>
                            <input type="text" class="form-control" name="tx_nome" id="tx_nome" required>
                        </div>

                        <div class="input-field col s3">
                            <label for="tx_nome_responsavel" class="active">Responsavel</label>
                            <input type="text" class="form-control" id="tx_nome_responsavel"
                                   name="tx_nome_responsavel">
                        </div>

                        <div class="input-field col s6">
                            <label for="supervisor">Supervisor responsável</label>
                            <input type="text" class="form-control" name="fk_supervisor"
                                   id="supervisor" required>
                        </div>
                        <div class="input-field col s10">
                            <label for="activate"><b>Tipos de atendimento</b></label>
                            <p>
                                <input type="radio" name="tp_grupo" id="Crinaça"
                                       value="Crinaça">
                                <label class="active" for="Crinaça">Criança</label>

                                <input type="radio" name="tp_grupo" id="Adolescente"
                                       value="Adolescente">
                                <label class="active" for="Adolescente">Adolescente</label>

                                <input type="radio" name="tp_grupo" id="Adulto"
                                       value="Adulto" checked="checked">
                                <label class="active" for="Adulto">Adulto</label>

                                <input type="radio" name="tp_grupo" id="Idoso"
                                       value="Idoso">
                                <label class="active" for="Idoso">Idoso</label>
                            </p>
                        </div>

                        <div class="input-field col s6" align="left">
                            <label for='queixa' class="active">Queixa principal:</label>
                            <textarea rows="50" cols="80" class="validate" name="tx_queixa" id="queixa" required
                                      placeholder="Escreva o motivo da solicitação do atendimento utilizando ao máximo as palavras do paciente"></textarea>
                        </div>
                        <div class="input-field col s6">
                            <label for="tp_recusa" class="active">Recusa:</label>
                            <input type="radio" id="caso" class="validate" value="C" name="tp_recusa">
                            <label for="caso">Caso encerrado.</label>
                            <input type="radio" id="encaminhamento" class="validate" value="E" name="tp_recusa">
                            <label for="encaminhamento">Encaminhamento externo.</label>
                        </div>
                        <div class="input-field col s3">
                            <label for="motivo" class="control-label">Motivo</label>
                            <input type="text" id="motivo" name="tx_motivo_recusa" class="form-control">
                        </div>
                        <div class="input-field col s3" align="left">
                            <label for="dtRecusa" class="active">Dt. recusa</label>
                            <input type="date" id="dtRecusa" name="dt_recusa" class="validate">
                        </div>


                        <div class="row">
                            <div class="input-field col s4" align="left">
                                <label for="familiar" class="active">Alguem em sua residência estuda
                                    em escola ou faculdade
                                    partiular? </label>
                                <input type="radio" id="sim" name="tp_familia"><label for="sim">Sim.</label>
                                <input type="radio" id="nao" name="tp_familia"><label for="nao">Não.</label>
                            </div>
                        </div>

                        <div class="input-field col s4">
                            <input type="text" id="mensalidade" name="nu_mensalidade" required
                                   class="validate"/>
                            <label for="mensalidade" class="active">Se sim. Qual o valor da
                                mensalidade?</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="number" id="nPessoas" class="validate" required name="nu_qtd_pessoa">
                            <label for="nPessoas" class="active">Quantas pessoas moram na sua
                                casa?</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="number" id="nTrabalham" class="validate" name="nu_qtd_trabalha">
                            <label for="nTrabalham" class="active">Quantos trabalham?</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="radio" id="tp_deficiencia_sim" class="validate"
                                   name="tp_deficiencia" value="S"><label for="tp_deficiencia_sim">Sim.</label>
                            <input type="radio" id="tp_deficiencia_nao" class="validate"
                                   name="tp_deficiencia" value="N"><label for="tp_deficiencia_nao">Não.</label>
                            <label for="tp_deficiencia" class="active">Alguem de sua família tem
                                alguma doença mental ou
                                transtorno mental? </label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" id="tx_deficiencia" name="tx_deficiencia"
                                   class="validate">
                            <label for="tx_deficiencia" class="active">Se sim. Qual?</label>
                        </div>


                        <div class="input-field col s4">
                            <input type="radio" id="sim3" name="tp_acompanhamento_psic"><label
                                    for="sim3">Sim.</label>
                            <input type="radio" id="nao3" name="tp_acompanhamento_psic"><label
                                    for="nao3">Não.</label>
                            <label for="tp_acompanhamento_psic" class="active">Você ou alguem da
                                família faz acompanhamento psiquiátrico?</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" class="validate" id="tx_local_acompanhamento"
                                   name="tx_local_acompanhamento">
                            <label class="active" for="tx_local_acompanhamento">Local do acompanhamento</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="radio" id="sim2" name="tp_drogas"><label
                                    for="sim2" value="s">Sim.</label>
                            <input type="radio" id="nao2" name="tp_drogas"><label
                                    for="nao2" value="n">Não.</label>
                            <label for="tp_acompanhamento_psic" class="active">Você é usuário de drogas?</label>
                        </div>
                        <div class="input-field col s10" align="left">
                            <label for='observacao' class="active">Observação:</label>
                            <input type="text" class="validate" name="observacao" id="observacao"
                                   required>
                        </div>
                        {{--Tipos de drogas--}}
                        {{--<div class="input-field col s4">--}}
                        {{--<input type="checkbox" id="cigarro" name="tp_drogas"><label--}}
                        {{--for="cigarro" value="C">Cigarro.</label>--}}
                        {{--<input type="checkbox" id="alcool" name="tp_drogas"><label--}}
                        {{--for="alcool" value="A">Álcool.</label>--}}
                        {{--<input type="checkbox" id="crack" name="tp_drogas"><label--}}
                        {{--for="crack" value="c">Crack.</label>--}}
                        {{--<input type="checkbox" id="maconha" name="tp_drogas"><label--}}
                        {{--for="maconha" value="M">Maconha.</label>--}}
                        {{--<input type="checkbox" id="cocaina" name="tp_drogas"><label--}}
                        {{--for="cocaina">Cocaina.</label>--}}
                        {{--<label for="tp_drogas" class="active">Se sim qual(is):</label>--}}
                        {{--</div><!-- quarta row !-->--}}


                        <input type="submit" value="Salvar" id="salvar" name="salvar" class="btn btn-success">
                        <a href="{{route('triagem.index')}}" class="btn red">Cancelar</a>
                    </form>
                </div>
            </div>

        </div>

    </div>
    </div>

@endsection
@endif
