@extends('layouts.app')
<!-- Adicionando Javascript -->
<script type="text/javascript" >

    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value=("");
        document.getElementById('bairro').value=("");
        document.getElementById('cidade').value=("");
        document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
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
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
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
@section('conteudo')
    <form action="list.php" method="post">
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
                        <input type="date" placeholder="" id="nascimento" name="nascimento" required
                               class="form-control"/>
                    </div>
                    <label for="estado" class="control-label col-md-2">Estado civil:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Estado civil" id="estado" name="estado" required
                               class="form-control"/>
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
                        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" class="form-control" onblur="pesquisacep(this.value);"/>
                    </div>
                    <label for="rua" class="control-label col-md-2">Endereço:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="rua" id="rua" name="rua" required
                               class="form-control"/>
                    </div>
                    <label for="numero" class="control-label col-md-2">Numero:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="numero" id="numero" name="numero" required
                               class="form-control"/>
                    </div>
                    <label for="bairro" class="control-label col-md-2">Bairro:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="bairro" id="bairro" name="bairro" required
                               class="form-control"/>
                    </div>
                    <label for="cidade" class="control-label col-md-2">Cidade:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="cidade" id="cidade" name="cidade" required
                               class="form-control"/>
                    </div>
                    <label for="uf" class="control-label col-md-2">UF:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="uf" id="uf" name="uf" required
                               class="form-control"/>
                    </div>
                    <label for="raca" class="control-label col-md-2">Raça:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Raça" id="raca" name="raca" required class="form-control"/>
                    </div>

                </div>


            </div>

            <div class="panel-footer" align="center">
                <button type="submit" value="Enviar" class="btn btn-success">Enviar</button>
                <button type="reset" value="Cancelar" class="btn btn-warning">Cancelar</button>
            </div>
        </div>
    </form>
@endsection
