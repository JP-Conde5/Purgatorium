@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO MORTAL</h1>
            </div>
        </div>
        <form action="/autor/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       value="{{$dados->NomeMortalis}}">
                <label for="nome">Filosofo preferido(Não pode ser Sartre):</label>
                <input type="text" class="form-control" name="filosofo" 
                       value="{{$dados->filosofoPreferido}}">
                <label for="nome">Time preferido:</label>
                <input type="text" class="form-control" name="timePreferido" 
                       value="{{$dados->timeCoraçao}}">
                <label for="nome">Nacionalidade:</label>
                <input type="text" class="form-control" name="Nacionalidade" 
                       value="{{$dados->nacionalidade}}">
                <label for="nome">Religiao:</label>
                <input type="text" class="form-control" name="religiao" 
                       value="{{$dados->religiao}}">
            </div>
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('home')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection