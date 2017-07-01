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
                        <div id="oculto">
                            <input type="number" name="id_supervisor" id="id_supervisor"
                                   value="{{$dados['id_supervisor'] or null}}" hidden>
                        </div>

                        <div class="input-field col s3">
                            <input type="text" id="tx_nome" value="{{$dados['tx_nome'] or null}}" name="tx_nome"
                                   required class="validate"/>
                            <label for="tx_nome" class="">Nome</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="nu_cpf" name="nu_cpf" value="{{$dados['nu_cpf'] or null}}" required
                                   class="validate"/>
                            <label for="nu_cpf">CPF:</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="text" id="nu_rg" name="nu_rg" value="{{$dados['nu_rg'] or null}}" required
                                   class="validate"/>
                            <label for="nu_rg">RG:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="tx_naturalidade" name="tx_naturalidade"
                                   value="{{$dados['tx_naturalidade'] or null}}" required class="validate"/>
                            <label for="email">Naturalidade:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="tx_uf_naturalidade" name="tx_uf_naturalidade"
                                   value="{{$dados['tx_uf_naturalidade'] or null}}" required
                                   class="validate"/>
                            <label for="tx_uf_naturalidade">UF naturalidade:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="tx_uf_orgao" name="tx_uf_orgao"
                                   value="{{$dados['tx_uf_orgao'] or null}}" required class="validate"/>
                            <label for="tx_uf_orgao">UF orgão:</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="text" id="tx_orgao_expe" name="tx_orgao_expe"
                                   value="{{$dados['tx_orgao_expe'] or null}}" required class="validate">
                            <label for="orgao">Orgão espeditor</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="text" id="tx_nome_responsavel" name="tx_nome_responsavel"
                                   value="{{$dados['tx__nome_responsavel'] or null}}" required
                                   class="validate"/>
                            <label for="tx_nome_responsavel">Responsavel:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="tx_parentesco" name="tx_parentesco"
                                   value="{{$dados['tx_parentesco'] or null}}" required class="validate"/>
                            <label for="tx_parentesco">Parentesco:</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="date" id="dt_nascimento" name="dt_nascimento"
                                   value="{{$dados['dt_nascimento'] or null}}" required class="validate"/>
                            <label for="nascimento">Nascimento:</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="text" id="nu_fone" name="nu_fone" value="{{$dados['nu_fone'] or null}}"
                                   required
                                   class="validate"/>
                            <label for="nu_fone">Telefone:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="nu_fone1" name="nu_fone1" value="{{$dados['nu_fone1'] or null}}"
                                   class="">
                            <label for="nu_fone1">Celular:</label>

                        </div>
                        <div class="input-field col s3">
                            <input name="nu_cep" type="text" id="nu_cep" value="{{$dados['nu_cep'] or null}}" size="10"
                                   maxlength="9"
                                   class="validate"
                                   onblur="pesquisacep(this.value);"/>
                            <label for="nu_cep">CEP:</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="text" id="tx_endereco" name="tx_endereco"
                                   value="{{$dados['tx_endereco'] or null}}" required
                                   class="validate"/>
                            <label for="tx_endereco">Endereço:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="nu_numero" name="nu_numero" value="{{$dados['nu_numero'] or null}}"
                                   required
                                   class="validate"/>
                            <label for="numero">Numero:</label>
                        </div>
                        <div class="input-field col  s3">
                            <input type="text" id="tx_bairro" name="tx_bairro" value="{{$dados['tx_bairro'] or null}}"
                                   required
                                   class="validate"/>
                            <label for="tx_bairro">Bairro:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="tx_cidade" name="tx_cidade" value="{{$dados['tx_cidade'] or null}}"
                                   required
                                   class="validate"/>
                            <label for="tx_cidade">Cidade:</label>
                        </div>
                        <div class="input-field col s3">
                            <input type="text" id="tx_uf" name="tx_uf" value="{{$dados['tx_uf'] or null}}" required
                                   class="validate"/>
                            <label for="tx_uf">UF:</label>
                        </div>

                        <div class="input col s6" align="left">
                            <b>Tipos de atendimento</b>
                            <input type="radio" name="tp_atendimento" value="{{$dados['tp_atendimento'] or 'C'}}"
                                   id="C" class="with-gap">
                            <label class="" for="C">Criança</label>

                            <input type="radio" name="tp_atendimento" value="{{$dados['tp_atendimento'] or 'D'}}"
                                   id="D" class="with-gap">
                            <label class="" for="D">Adolescente</label>

                            <input type="radio" name="tp_atendimento" value="{{$dados['tp_atendimento'] or 'D'}}"
                                   id="A" class="with-gap">
                            <label class="" for="A">Adulto</label>

                            <input type="radio" name="tp_atendimento" value="{{$dados['tp_atendimento'] or 'I'}}"
                                   id="I" class="with-gap">
                            <label class="" for="I">Idoso</label>

                        </div>
                        <p>
                            <b>Orientação sexual:</b>
                            <input type="radio" id="homossexual" class="with-gap"
                                   value="{{$dados['tp_orientacao_sexual'] or 'H'}}" name="tp_orientacao_sexual"><label
                                    class=""
                                    for="homossexual">Homossexual</label>
                            <input type="radio" id="heterossexual" class="with-gap"
                                   value="{{$dados['tp_orientacao_sexual'] or 'T'}}"
                                   class="with-gap"
                                   name="tp_orientacao_sexual"><label
                                    class=""
                                    for="heterossexual">Heterossexual</label>
                            <input type="radio" id="assexual" class="with-gap" name="tp_orientacao_sexual"
                                   value="{{$dados['tp_orientacao_sexual'] or 'A'}}"><label
                                    for="assexual">Assexual</label>

                            <input type="radio" id="bissexual" class="with-gap"
                                   class="with-gap" value="{{$dados['tp_orientacao_sexual'] or 'B'}}"
                                   name="tp_orientacao_sexual">
                            <label
                                    for="bissexual">Bissexual</label>
                        </p>

                        <p>
                            <b>Sexo</b>
                            <input type="radio" class="with-gap" id="masculino" name="tx_sexo"
                                   value="{{$dados['tx_sexo'] or 'M'}}"
                            ><label
                                    for="masculino">Masculino</label>
                            <input type="radio" class="with-gap" id="feminino" name="tx_sexo"
                                   value="{{$dados['tx_sexo'] or 'F'}}">
                            <label
                                    for="feminino">Feminino</label>
                        </p>

                        <p>
                            <b>Raça:</b>
                            <input type="radio" id="negro" class="with-gap" name="tx_raca"
                                   value="{{$dados['tx_raca'] or 'N'}}"
                            ><label
                                    for="negro">Negro</label>
                            <input type="radio" id="Branco" class="with-gap" name="tx_raca"
                                   value="{{$dados['tx_raca'] or 'B'}}">
                            <label
                                    for="Branco">Branco</label>
                            <input type="radio" id="Pardo" class="with-gap" name="tx_raca"
                                   value="{{$dados['tx_raca'] or 'P'}}">
                            <label for="Pardo">Pardo</label>
                            <input type="radio" id="indigena" class="with-gap" name="tx_raca"
                                   value="{{$dados['tx_raca'] or 'I'}}">
                            <label
                                    for="indigena">Indígena</label>
                        </p>

                        <p>
                            <b>Estado Civil</b>
                            <input type="radio" id="solteiro" name="tx_estado_civil"
                                   value="{{$dados['tx_estado_civil'] or 'S'}}" class="with-gap"
                            ><label for="solteiro">Solteiro</label>
                            <input type="radio" id="casado" name="tx_estado_civil"
                                   value="{{$dados['tx_estado_civil'] or 'C'}}" class="with-gap"><label
                                    for="casado">Casado(a)</label>
                            <input type="radio" id="divorciado" name="tx_estado_civil"
                                   value="{{$dados['tx_estado_civil'] or 'D'}}" class="with-gap"><label
                                    for="divorciado">Divorciado(a)</label>
                        </p>


                        <div class="input-field col s6">
                            <input type="text" id="aluno" value="{{$dados['fk_aluno'] or null}}" name="fk_aluno"
                                   required
                                   class="validate"/>
                            <label for="aluno">Aluno:</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="text" id="supervisor" value="{{$dados['fk_supervisor'] or null}}"
                                   name="fk_supervisor" required
                                   class="validate"/>
                            <label for="supervisor">Supervisor:</label>
                        </div>
                        <input type="submit" value="Salvar" id="salvar" name="salvar" onclick=""
                               class="btn btn-success">
                        <a href="{{route('paciente.index')}}" class="btn red">Cancelar</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        function EventAlert() {
            swal("Cadastro efetuado com sucesso!", "success")
        }
    </script>
@endsection