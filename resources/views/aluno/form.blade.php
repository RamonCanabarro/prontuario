@extends('templates/principal')
@section('titulo', 'Cadastro de Aluno')

@section('conteudo')
    <script>
        $(document).ready(function () {
            $("#nu_fone").mask("(99) 9999-9999?9");
        });
        $(document).ready(function () {
            $("#nu_cep").mask("99999-999");
        });
        $(document).ready(function () {
            $("#nu_fone2").mask("(99) 9999-9999?9");
        });

    </script>
    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div>
                        <h4 class="grey-text" align="center">Cadastro de Aluno</h4>
                    </div>
                    <form method="post" action={{route('aluno.salvar')}}>
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s8">
                                <input id="tx_nome" name="tx_nome" type="text" class="validate" required>
                                <label for="tx_nome">Nome</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="text" id="nu_codigo" name="nu_codigo" validate required>
                                <label for="nu_codigo">Codigo</label>
                            </div>
                            <div class="input-field col s2">
                                <input type="text" maxlength="9" id="nu_cep" name="nu_cep" class="validate" required>
                                <label for="nu_cep">CEP</label>
                            </div>
                            <div class="input-field col s3">
                                <input type="text" id="tx_endereco" name="tx_endereco" class="validate" required>
                                <label for="tx_endereco">Endereço</label>
                            </div>
                            <div class="input-field col s3">
                                <input type="text" id="tx_bairro" name="tx_bairro" class="validate" required>
                                <label for="tx_bairro">Bairro</label>
                            </div>
                            <div class="input-field col s3">
                                <input type="text" id="tx_cidade" name="tx_cidade" class="validate" required>
                                <label for="tx_cidade">Cidade</label>
                            </div>
                            <div class="input-field col s1">
                                <input type="text" id="tx_uf" maxlength="2" name="tx_uf" class="validate" required>
                                <label for="tx_uf">UF</label>
                            </div>
                            <div class="input-field col s3">
                                <input type="text" id="nu_fone" name="nu_fone" required class="validate">
                                <label for="nu_fone">Telefone</label>
                            </div>
                            <div class="input-field col s3">
                                <input type="text" id="nu_fone2" name="nu_fone2" required class="validate">
                                <label for="nu_fone2">Celular</label>
                            </div>
                        </div>
                        <input type="submit" value="Salvar" id="salvar" name="salvar" class="btn btn-success">
                        <a href="{{route('aluno.list')}}" class="btn red">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection