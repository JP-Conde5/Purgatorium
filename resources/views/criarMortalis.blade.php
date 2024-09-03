@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO MORTAL!!!!!!!!!!</h1>
            </div>
        </div>
        <form action="{{route('@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO MORTAL!!!!!!!!!!</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoMortalis')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome"
                        placeholder="Informe seu nome">
            </div>
            <div>
                <label for="filosofo">Filosofo preferido(Não pode ser Sartre):</label>
                <input type="text" class="form-control" name="filosofo" 
                       placeholder="Informe o nome do filósofo">
            </div>
            <div>
                <label for="time">Time preferido:</label>
                <input type="text" class="form-control" name="time" 
                       placeholder="Informe o nome do time favorito">
            </div>
            <div>
                <label for="nacionalidade">Nacionalidade:</label>
                <input type="text" class="form-control" name="nacionalidade" 
                        placeholder="Informe a nacionalidade do humano">
            </div>
            <div>    
                <label for="religiao">Religiao:</label>
                <input type="text" class="form-control" name="religiao" 
                        placeholder="Informe a religiao">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('home')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection