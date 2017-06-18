@extends('templates/principal')

@section('conteudo')

	<div class="row">
		<div class="col s10 offset-s1">
			<div class="card">
				<div class="card-content">
					<div>
						<h4 class="grey-text" align="center">Lista de Médicos/Alunos</h4>
					</div>
					<table class="striped bordered">
						<thead>
						<tr>
							<th>Ação</th>
							<th>Codigo</th>
							<th>Nome</th>
							<th>Telefone</th>
						</tr>
						</thead>
						<tbody>
						@foreach($dados as $dado)
							<tr>
								<td>
									<a class="waves-effect waves-light" href="aluno/alterar"><i
												class="material-icons left">mode_edit</i></a>

									<a href="aluno/excluir/{{$dado['id_aluno']}}"><i
												class="material-icons left red-text">delete</i></a>
								</td>
								<td>{{$dado['nu_codigo']}}</td>
								<td>{{$dado['tx_nome']}}</td>
								<td>{{$dado['nu_fone']}}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
				<div class="right-align">
					<a class="btn-floating btn-large waves-effect waves-light" href="aluno/form"><i
								class="material-icons">add</i></a>
				</div>
			</div>
		</div>
	</div>
@endsection