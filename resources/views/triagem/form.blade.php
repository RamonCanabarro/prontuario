<!-- created by: Thiago !-->
<!-- date: 07/05/2017 !-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="panel-heading">
    <center><h2>Triagem</h2></center>
</div>

<center>
    <form method="POST" action="cadastro.php">
        <div class="col-md-1"></div> <!-- borda esquerda !-->
        <div class="col-md-10"> <!-- conteudo centralizado em 10 colunas !-->
            <div class = "form-group">

                <div class="row">
                    <div class="col-md-3" align="left">
                        <label for='data'>Data</label>
                        <input type="date" class ="form-control" name="data" id="data"required>
                    </div>

                    <div class="col-md-5" align="left">
                        <label for="modalidade">Modalidade</label>
                        <div>
                            <label class="radio-inline" for="modalidadeCrianca">
                                <input type="radio" name="modalidade" id="modalidadeCrianca" value="modalidadeCrianca">
                                Criança
                            </label>
                            <label class="radio-inline" for="modalidadeAdolescente">
                                <input type="radio" name="modalidade" id="modalidadeAdolescente" value="modalidadeAdolescente">
                                Adolescente
                            </label>
                            <label class="radio-inline" for="modalidadeAdulto">
                                <input type="radio" name="modalidade" id="modalidadeAdulto" value="modalidadeAdulto" checked="checked">
                                Adulto
                            </label>
                            <label class="radio-inline" for="modalidadeIdoso">
                                <input type="radio" name="modalidade" id="modalidadeIdoso" value="modalidadeIdoso">
                                Idoso
                            </label>
                        </div>
                    </div>

                    <div class="col-md-4" align="left">
                        <label for='inscricao'>Número de inscrição</label>
                        <input type="number" class ="form-control" name="inscricao" id="inscricao"required>
                    </div>

                </div> <!-- primeira row !--> <br>
@if($nome=='ricardo')
                <div class="row">
                    <div class="col-md-8" align="left">
                        <label for='nome'>Nome do paciente</label>
                        <input type="text" class ="form-control" name="nome" id="nome"required>
                    </div>

                    <div class="col-md-4"align="left">
                        <label for='idade'>Idade</label>
                        <input type="number" class ="form-control" name="idade" id="idade"required>
                    </div>
                </div> <!-- segunda row !--> <br>
@else
                <div class="row">
                    <div class="col-md-6" align="left">
                        <label for='triador'>Triador</label>
                        <input type="text" class ="form-control" name="triador" id="triador"required>
                    </div>

                    <div class="col-md-6" align="left">
                        <label for='supervisor'>Supervisor responsável</label>
                        <input type="text" class ="form-control" name="supervisor" id="supervisor"required>
                    </div>
                </div> <!-- terceira row !--> <br>

                <div class="row">
                    <div class="col-md-6" align="left">
                        <label for="atendimento">Tipos de atendimento</label>
                        <div><b>Individual:</b>
                            <label class="radio-inline" for="individualCrianca">
                                <input type="radio" name="atendimento" id="individualCrianca" value="individualCrianca">
                                Criança
                            </label>
                            <label class="radio-inline" for="individualAdolescente">
                                <input type="radio" name="atendimento" id="individualAdolescente" value="individualAdolescente">
                                Adolescente
                            </label>
                            <label class="radio-inline" for="individualAdulto">
                                <input type="radio" name="atendimento" id="individualAdulto" value="individualAdulto" checked="checked">
                                Adulto
                            </label>
                            <label class="radio-inline" for="individualIdoso">
                                <input type="radio" name="atendimento" id="individualIdoso" value="individualIdoso">
                                Idoso
                            </label>
                        </div>

                        <div><b>Grupo:</b>
                            <label class="radio-inline" for="grupoCrianca">
                                <input type="radio" name="atendimento" id="grupoCrianca" value="grupoCrianca">
                                Criança
                            </label>
                            <label class="radio-inline" for="grupoAdolescente">
                                <input type="radio" name="atendimento" id="grupoAdolescente" value="grupoAdolescente">
                                Adolescente
                            </label>
                            <label class="radio-inline" for="grupoMulher">
                                <input type="radio" name="atendimento" id="grupoMulher" value="grupoMulher">
                                Adulto
                            </label>
                            <label class="radio-inline" for="grupoHomem">
                                <input type="radio" name="atendimento" id="grupoHomem" value="grupoHomem">
                                Idoso
                            </label>
                            <label class="radio-inline" for="grupoEducacaoFamiliar">
                                <input type="radio" name="atendimento" id="grupoEducacaoFamiliar" value="grupoEducacaoFamiliar">
                                Idoso
                            </label>
                            <label class="radio-inline" for="grupoDrogadicao">
                                <input type="radio" name="atendimento" id="grupoDrogadicao" value="grupoDrogadicao">
                                Idoso
                            </label>
                        </div>

                        <div><b>Temporário:</b>
                            <label class="radio-inline" for="temporarioCasal">
                                <input type="radio" name="atendimento" id="temporarioCasal" value="temporarioCasal">
                                Criança
                            </label>
                            <label class="radio-inline" for="temporarioFamiliar">
                                <input type="radio" name="atendimento" id="temporarioFamiliar" value="temporarioFamiliar">
                                Adolescente
                            </label>
                            <label class="radio-inline" for="adulto">
                                <input type="radio" name="atendimento" id="adulto" value="adulto">
                                Adulto
                            </label>
                        </div>
                    </div>
                </div> <!-- row dos radios !--> <br>

                <div class="row">
                    <div class="col-md-12" align="left">
                        <label for='queixa'>Queixa principal</label>
                        <textarea rows="8" cols="50" class ="form-control" name="queixa" id="queixa" required placeholder="Escreva o motivo da solicitação do atendimento utilizando ao máximo as palavras do paciente"></textarea>
                    </div>
                </div><br>
                <div align="right">
                    <input type="reset" class="btn btn-danger" value="Cancelar">
                    <input type="button" class="btn btn-primary" value="Enviar">
                </div>

            </div> <!-- form groups !-->
        </div> <!-- conteudo centralizado em 10 colunas !-->
@endif

    </form>
</center>

