@extends('templates/principal')
<!-- Adicionando Javascript -->
@section('conteudo')
    <script type="text/javascript">

        $(document).ready(function () {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#tx_endereco").val("");
                $("#tx_bairro").val("");
                $("#tx_cidade").val("");
                $("#tx_uf").val("");
                //   $("#ibge").val("");
            }

            //Quando o campo cep perde o foco.
            $("#nu_cep").blur(function () {

                //Nova variável "cep" somente com dígitos.
                var nu_cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (nu_cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(nu_cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#tx_endereco").val("...");
                        $("#tx_bairro").val("...");
                        $("#tx_cidade").val("...");
                        $("#tx_uf").val("...");
                        //    $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/" + nu_cep + "/json/?callback=?", function (dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#tx_endereco").val(dados.logradouro);
                                $("#tx_bairro").val(dados.bairro);
                                $("#tx_cidade").val(dados.localidade);
                                $("#tx_uf").val(dados.uf);
                                //      $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });


    </script>

    {{--<form >--}}
    {{--inicio da row 1--}}
    <div class="row">
        <div class="row">
            <div class="card">
                <div class="card-content">
                    <div align="center">
                        <h4>Cadastro de paciente</h4>
                    </div>

                    <form method="post" action={{route('paciente.salvar')}}>
                        {{ csrf_field() }}

                        <div class="input-field col s3">
                            <input type="text" id="tx_nome" value="{{$dados['tx_nome']}}" name="tx_nome" required class="validate"/>
                            <label for="tx_nome" class="">Nome</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="nu_cpf" name="nu_cpf" value="{{$dados['nu_cpf']}}" required class="validate"/>
                            <label for="nu_cpf">CPF:</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="text" id="nu_rg"  name="nu_rg" value="{{$dados['nu_rg']}}" required class="validate"/>
                            <label for="nu_rg">RG:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="tx_naturalidade" name="tx_naturalidade" value="{{$dados['tx_naturalidade']}}" required class="validate"/>
                            <label for="email">Naturalidade:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="tx_uf_naturalidade" name="tx_uf_naturalidade" required
                                   class="validate"/>
                            <label for="tx_uf_naturalidade">UF naturalidade:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="tx_uf_orgao" name="tx_uf_orgao" required class="validate"/>
                            <label for="tx_uf_orgao">UF orgão:</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="text" id="tx_orgao_expe" name="tx_orgao_expe" required class="validate">
                            <label for="orgao">Orgão espeditor</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="text" id="tx_nome_responsavel" name="tx_nome_responsavel" required
                                   class="validate"/>
                            <label for="tx_nome_responsavel">Responsavel:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="tx_parentesco" name="tx_parentesco" required class="validate"/>
                            <label for="tx_parentesco">Parentesco:</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="date" id="dt_nascimento" name="dt_nascimento" required class="validate"/>
                            <label for="nascimento">Nascimento:</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="text" id="nu_fone" name="nu_fone" required
                                   class="validate"/>
                            <label for="nu_fone">Telefone:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="nu_fone1" name="nu_fone1" class="">
                            <label for="nu_fone1">Celular:</label>

                        </div>
                        <div class="input-field col s3">
                            <input name="nu_cep" type="text" id="nu_cep" value="" size="10" maxlength="9"
                                   class="validate"
                                   onblur="pesquisacep(this.value);"/>
                            <label for="nu_cep">CEP:</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="text" id="tx_endereco" name="tx_endereco" required
                                   class="validate"/>
                            <label for="tx_endereco">Endereço:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="nu_numero" name="nu_numero" required
                                   class="validate"/>
                            <label for="numero">Numero:</label>
                        </div>
                        <div class="input-field col  s3">
                            <input type="text" id="tx_bairro" name="tx_bairro" required
                                   class="validate"/>
                            <label for="tx_bairro">Bairro:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="tx_cidade" name="tx_cidade" required
                                   class="validate"/>
                            <label for="tx_cidade">Cidade:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="tx_uf" name="tx_uf" required
                                   class="validate"/>
                            <label for="tx_uf">UF:</label>
                        </div>

                        <div class="input col s6" align="left">
                            <b>Tipos de atendimento</b>
                            <input type="radio" name="tp_atendimento" id="C" value="C">
                            <label class="" for="C">Criança</label>

                            <input type="radio" name="tp_atendimento" id="D" value="D">
                            <label class="" for="D">Adolescente</label>

                            <input type="radio" name="tp_atendimento" id="A" value="A">
                            <label class="" for="A">Adulto</label>

                            <input type="radio" name="tp_atendimento" id="I" value="I">
                            <label class="" for="I">Idoso</label>

                        </div>
                        <p>
                            <b>Orientação sexual:</b>
                            <input type="radio" id="homossexual" class="with-gap" name="tp_orientacao_sexual" value="H"><label
                                    class=""
                                    for="homossexual">Homossexual</label>
                            <input type="radio" id="heterossexual" class="with-gap"
                                   name="tp_orientacao_sexual" value="T"><label
                                    class=""
                                    for="heterossexual">Heterossexual</label>
                            <input type="radio" id="assexual" class="with-gap" name="tp_orientacao_sexual"
                                   value="A"><label
                                    class=""
                                    for="assexual">Assexual</label>

                            <input type="radio" id="bissexual" class="with-gap" name="tp_orientacao_sexual"
                                   value="B"><label
                                    class=""
                                    for="bissexual">Bissexual</label>
                        </p>

                        <p>
                            <b>Sexo</b>
                            <input type="radio" id="masculino" name="tx_sexo" class="with-grap" value="M"><label
                                    for="masculino">Masculino</label>
                            <input type="radio" id="feminino" name="tx_sexo" class="with-grap" value="F"><label
                                    for="feminino">Feminino</label>
                        </p>

                        <p>
                            <b>Raça:</b>
                            <input type="radio" id="negro" name="tx_raca" class="with-grap" value="N"><label
                                    for="negro">Negro</label>
                            <input type="radio" id="Branco" name="tx_raca" class="with-grap" value="B"><label
                                    for="Branco">Branco</label>
                            <input type="radio" id="Pardo" name="tx_raca" class="with-grap" value="P"><label
                                    for="Pardo">Pardo</label>

                            <input type="radio" id="indigena" name="tx_raca" class="with-grap" value="I"><label
                                    for="indigena">Indígena</label>
                        </p>

                        <p>
                            <b>Estado Civil</b>
                            <input type="radio" id="solteiro" name="tx_estado_civil" value="S" class="with-gap"><label
                                    for="solteiro">Solteiro</label>
                            <input type="radio" id="casado" name="tx_estado_civil" class="with-gap" value="C"><label
                                    for="casado">Casado(a)</label>
                            <input type="radio" id="divorciado" name="tx_estado_civil" class="with-gap" value="D"><label
                                    for="divorciado">Divorciado(a)</label>
                        </p>


                        <div class="input-field col s6">
                            <input type="text" id="aluno" name="fk_aluno" required
                                   class="validate"/>
                            <label for="aluno">Aluno:</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="text" id="supervisor" name="fk_supervisor" required
                                   class="validate"/>
                            <label for="supervisor">Supervisor:</label>
                        </div>
                        <input type="submit" value="Salvar" id="salvar" name="salvar" class="btn btn-success">
                        <a href="{{route('paciente.index')}}" class="btn red">Cancelar</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
{{--@endif--}}