@foreach($dados as $dado)
    <h2>{{$dado->nome}} com o telefone{{$dado->telefone}}</h2>
    <br>
    @endforeach