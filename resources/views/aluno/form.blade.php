@extends('templates/principal')
@section('titulo', 'Cadastro de Aluno')

@section('conteudo')
	<div class="row">
		<div class="col s10 offset-s1">
			<div class="card">
				<div class="card-content">
					<div>
						<h4 class="grey-text" align="center">Cadastro de Aluno</h4>
					</div>
					<form method="post" action="aluno/salvar">
						<div class="row">
							<div class="input-field col s8">
								<input id="nome" type="text" class="validate" required>
								<label for="nome">Nome</label>
							</div>
							<div class="input-field col s4">
								<input type="text" id="codigo" name="codigo" validate required>
								<label for="codigo">Codigo</label>
							</div>
							<div class="input-field col s2">
								<input type="text" maxlength="9" id="cep" name="cep" class="validate" required>
								<label for="cep">CEP</label>
							</div>
							<div class="input-field col s3">
								<input type="text" id="endereco" name="endereco" class="validate" required>
								<label for="endereco">Endereço</label>
							</div>
							<div class="input-field col s3">
								<input type="text" id="bairro" name="bairro" class="validate" required>
								<label for="bairro">Bairro</label>
							</div>
							<div class="input-field col s3">
								<input type="text" id="cidade" name="cidade" class="validate" required>
								<label for="cidade">Cidade</label>
							</div>
							<div class="input-field col s1">
								<input type="text" id="uf" name="uf" class="validate" required>
								<label for="uf">UF</label>
							</div>
							<div class="input-field col s3">
								<input type="text" id="fone" name="fone" required class="validate">
								<label for="fone">Telefone</label>
							</div>
							<div class="input-field col s3">
								<input type="text" id="cel" name="cel" required class="validate">
								<label for="cel">Celular</label>
							</div>
						</div>
						<a class="waves-effect waves-light btn"><i class="material-icons right">done</i>Salvar</a>
						<a class="waves-effect waves-light btn"><i class="material-icons right">cancel</i>Cancelar</a>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection