@extends('layouts.app')
<!-- Adicionando Javascript -->
@section('conteudo')
    <script type="text/javascript">

        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value = ("");
            document.getElementById('bairro').value = ("");
            document.getElementById('cidade').value = ("");
            document.getElementById('uf').value = ("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value = (conteudo.logradouro);
                document.getElementById('bairro').value = (conteudo.bairro);
                document.getElementById('cidade').value = (conteudo.localidade);
                document.getElementById('uf').value = (conteudo.uf);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor;
//                .replace(/\D/g, '');
            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('cidade').value = "...";
                    document.getElementById('uf').value = "...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';
                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

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
        };

    </script>

    {{--<form >--}}
{{--inicio da row 1--}}
    <div class="row">
    <form action="list.blade.php" method="post" class="col s12">
    {{--inicio da row 2--}}
        <div class="nav-wrapper" align="center">
            <h4>Cadastro de paciente</h4>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-image">

        <div class="input-field col s6">
        <input type="text" id="tx_nome" name="tx_nome" required class="validate"/>
        <label for="tx_nome" class="active">Nome</label>
    </div>
        <div class="input-field col s6">
        <input type="text"  id="nu_cpf" name="nu_cpf" required class="validate"/>
        <label for="nu_cpf" class="active">CPF:</label>
    </div>

        <div class="input-field col s6">
            <input type="text" placeholder="" id="nu_rg" name="nu_rg" required class="validate"/>
            <label for="nu_rg" class="active">RG:</label>
        </div>
            <div class="input-field col s6">
                <input type="text" id="tx_naturalidade" name="tx_naturalidade" required class="validate"/>
                <label for="email" class="active">Naturalidade:</label>
            </div>
            <div class="input-field col s6">
                <input type="text" id="tx_uf_naturalidade" name="tx_naturalidade" required class="validate"/>
                <label for="tx_uf_naturalidade" class="active">UF naturalidade:</label>
            </div>
            <div class="input-field col s6">
                <input type="text" id="tx_uf_orgao" name="tx_uf_orgao" required class="validate"/>
                <label for="tx_uf_orgao" class="active">UF orgão:</label>
            </div>

            <div class="input-field col s6">
            <input type="text" id="tx_orgao_expe" name="tx_orgao_expe" required class="validate">
            <label for="orgao" class="active">Orgão espeditor</label>
        </div>

        <div class="input-field col s6">
        <input type="text"  id="tx_responsavel" name="tx_responsavel" required class="validate"/>
        <label for="tx_responsavel" class="active">Responsavel:</label>
    </div>
        <div class="input-field col s6">
        <input type="text"  id="tx_parentesco" name="tx_parentesco" required class="validate"/>
        <label for="tx_parentesco" class="active">Parentesco:</label>
        </div>

                <div class="input-field col s6">
                    <input type="date"  id="dt_nascimento" name="dt_nascimento" required class="validate"/>
                    <label for="nascimento" class="active">Nascimento:</label>
                </div>

                <div class="input-field col s6">
                    <label for="nu_telefone" class="active">Telefone:</label>
                    <input type="text" id="nu_telefone" name="nu_telefone" required
                    class="validate"/>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="nu_fone1" placeholder=""name="nu_fone1" class="active">
                    <label for="nu_fone1" class="active">Celular:</label>

                </div>
    </div>
        {{--fim da row 2--}}
        {{--inicio da row 3--}}

        <div class="row">
                    <div class="input-field col s6">
                        <input name="nu_cep" type="text" id="nu_cep" value="" size="10" maxlength="9" class="validate"
                        onblur="pesquisacep(this.value);"/>
                        <label for="nu_cep" class="active">CEP:</label>
                    </div>

                    <div class="input-field col s6">
                        <label for="tx_endereco" class="active">Endereço:</label>
                        <input type="text" placeholder="" id="tx_endereco" name="tx_endereco" required class="validate"/>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" placeholder="" id="nu_numero" name="nu_numero" required
                        class="validate"/>
                        <label for="numero" class="active">Numero:</label>
                    </div>
                    <div class="input-field col  s6">
                        <input type="text" placeholder="" id="tx_bairro" name="tx_bairro" required
                        class="validate"/>
                        <label for="tx_bairro" class="active">Bairro:</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" placeholder="" id="tx_cidade" name="tx_cidade" required
                        class="validate"/>
                        <label for="tx_cidade" class="active">Cidade:</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" placeholder="" id="uf" name="uf" required
                        class="form-control"/>
                        <label for="uf" class="control-label col-md-2">UF:</label>
                    </div>

                   <div class="input-field col s6">
                   <label for="active">Raça:</label><br>
                       <input type="radio" id="Negro" name="tx_raca" class="validate"><label for="Negro">Negro</label>
                       <input type="radio" id="Branco" name="tx_raca" class="validate"><label for="Branco">Branco</label>
                       <input type="radio" id="Pardo" name="tx_raca" class="validate"><label for="Pardo">Pardo</label>
                   </div>
                   </div>
                    <div class="input-field s6">
                        <label for="estado" class="active">Estado Civil</label>
                        <input type="radio" id="solteiro" name="tx_estado_civil" class="tx_estado_civil"><label for="solteiro">Solteiro</label>
                        <input type="radio" id="casado" name="tx_estado_civil" class="validate"><label for="casado">Casado(a)</label>
                        <input type="radio" id="divorciado" name="tx_estado_civil" class="validate"><label for="divorciado">Divorciado(a)</label>
                        </div>
                </div>
        </div>
    </form></div></div>

            <div class="panel-footer" align="center">
                <button type="submit" value="Enviar" class="btn btn-success">Enviar</button>
                <button type="reset" value="Cancelar" class="btn btn-warning">Cancelar</button>
            </div>
        </div>
    </form>
@endsection