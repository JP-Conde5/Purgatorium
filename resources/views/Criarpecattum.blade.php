@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO PECATTUM</h1>
            </div>
        </div>
        <form action="/pais/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       value="{{$dados->NomePecattum}}">
                <label for="nome">Descrição:</label>
                <input type="text" class="form-control" name="descrição" 
                       value="{{$dados->descricao}}">
                <label for="nome">Karma:</label>
                <input type="text" class="form-control" name="karma" 
                       value="{{$dados->karma}}">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('home')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection