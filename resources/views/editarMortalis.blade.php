@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div style="color: black" class="container">
                <h1 class="mt-5 text-center">Editar Mortal</h1>
        </div>
        <form action="/atualizarMortalis/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       value="{{$dados->nomeMortalis}}">
            </div>
            <br>
            <div class="form-group">
                <label for="anoMorte">Ano de Morte:</label>
                <input type="text" class="form-control" name="anoMorte"
                    value="{{$dados->anoMorte}}">
            </div>
            <br>
            <div class="form-group">
                <label for="filosofo">Filosofo preferido(Não pode ser Sartre):</label>
                <input type="text" class="form-control" name="filosofo" 
                       value="{{$dados->filosofo}}">
            </div>
            <br>
            <div class="form-group">
                <label for="time">Time preferido:</label>
                <input type="text" class="form-control" name="time" 
                       value="{{$dados->time}}">
            </div>
            <br>
            <div class="form-group">
                <label for="nacionalidade">Nacionalidade:</label>
                <input type="text" class="form-control" name="nacionalidade" 
                       value="{{$dados->nacionalidade}}">
            </div>
            <br>
            <div class="form-group">
                <label for="religiao">Religiao:</label>
                <input type="text" class="form-control" name="religiao" 
                       value="{{$dados->religiao}}">
            </div>
            <br>
            <div class="buttons">
                <button type="submit" class="btn btn-dark">Servare</button>
                <button onclick="window.location.href='{{route('home')}}';" type="button" 
                    class="btn btn-danger">Cancel</button>
            </div>
        </form>
    </div> 
</div> 
</div>
@endsection