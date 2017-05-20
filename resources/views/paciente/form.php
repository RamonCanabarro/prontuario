
<html>
<head>
    <title>Cadastro de pacientes</title>
    <meta charset="utf-8" />

    <link type="text/css" rel="stylesheet" href="../js/bootstrap/css/bootstrap.min.css" />

    <script type="text/javascript" src="../js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap/js/bootstrap.min.js"></script>


</head>
<body>
<link type="text/css" rel="stylesheet" href="js/bootstrap/css/bootstrap.css"/>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cadastro</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="">Inicio</a></li>
                <li><a href="">Triagem</a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container" style="margin-top: 60px;">








    <table   align="center" style="width:600px" border="0"><tr><td style="font:12px verdana; color:#000">


                <div class="panel panel-primary">
                    <div class="panel panel-heading">Cadastro de pacientes</div>
                    <form name="signup" action="list.php" align="center">
                        <fieldset>
                            <legend>Paciente</legend>
                            <div class="form-group">
                                <label for="nome">Nome:</label><textarea rows="1" cols="10" class="form-control" type="text" name="first" id="nome" placeholder="Nome"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereco:</label><textarea rows="1" cols="10" class="form-control" type="text" name="address" id="endereco" placeholder="Endereço"></textarea><br>
                            </div>
                            <div class="form-group">
                                <label for="cidade">Cidade:</label><textarea rows="1" cols="10" class="form-control" type="text" name="cidade1" id="cidade" placeholder="Cidade"></textarea><br>
                            </div>
                            <div class="form-group">
                                <label for="bairro">Bairro:</label><textarea rows="1" cols="10" class="form-control" type="text" name="bairro" id="bairro" placeholder="Bairro"></textarea><br>
                            </div>
                            <div class="form-group">
                                <label for="cep">CEP:</label><input rows="1" cols="10" class="form-control" type="number" name="cep" id="cep" placeholder="Cep"><br>
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF:</label><input rows="1" cols="10" class="form-control" type="number" name="cpf" id="cpf" placeholder="CPF"><br>
                            </div>
                            <div class="form-group">
                                <label for="rg">RG:</label><input rows="1" cols="10" class="form-control" type="number" name="rg" id="rg" placeholder="RG"><br>
                            </div>
                            <div class="form-group">
                                <label for="uf">UF:</label><select name="uf" id="uf">
                                    <option>Selecione</option>
                                    <option>DF</option>
                                    <option>GO</option>
                                </select><br>
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone:</label><input rows="1" cols="10" class="form-control" type="number" name="telefone" id="telefone" placeholder="Telefone">
                            </div>
                            <div class="form-group">
                                <label for="celular">Celular:</label><input rows="1" cols="10" class="form-control" type="number" name="celular" id="celular" placeholder="Celular"><br>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail:</label><textarea rows="1" cols="10" class="form-control" type="text" name="email" id="email" placeholder="E-mail"></textarea><br>
                            </div>
                            Sexo:<input type="radio" name="gender" id="mascu"><label for="mascu">Masculino</label>
                            <input type="radio" name="gender" id="fem"><label for="fem">Feminino</label><br>

                            <fieldset>
                                <label for="estado">Estado Civil:</label><select name="estado" id="estado">
                                    <option>Selecione</option>
                                    <option>Casado(a)</option>
                                    <option>Divorciado(a)</option>
                                    <option>Solteiro(a)</option>
                                    <option>Uni�o Estavel</option>
                                    <option>Vi�vo(a)</option>
                                </select><br><br>

                                <label for="raca">Cor/Raça:</label><select name="raca" id="raca">
                                    <option>Selecione</option>
                                    <option>Amarela</option>
                                    <option>Branca</option>
                                    <option>Indigena</option>
                                    <option>Parda</option>
                                    <option>Preta</option>
                                </select><br>
                            </fieldset>
                        </fieldset><br><br>


                        <a type="submit" class="btn btn-danger" href="">Enviar</a>
                        <a type="submit" class="btn btn-danger">Cancelar</a>

                    </form>
                </div>

    </table>
</body>
</html>
