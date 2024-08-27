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
                       placeholder="Informe o nome do autor">
                <label for="nome">Filosofo preferido(Não pode ser Sartre):</label>
                <input type="text" class="form-control" name="filosofo" 
                       placeholder="Informe o nome do filósofo">
                <label for="nome">Time preferido:</label>
                <input type="text" class="form-control" name="timePreferido" 
                       placeholder="Informe o nome do time favorito">
                <label for="nome">Nacionalidade:</label>
                <input type="text" class="form-control" name="Nacionalidade" 
                placeholder="Informe a nacionalidade do humano">
                <label for="nome">Religiao:</label>
                <input type="text" class="form-control" name="religiao" 
                placeholder="Informe a religiao">
            </div>
            <hr>
            <hr>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('home')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection