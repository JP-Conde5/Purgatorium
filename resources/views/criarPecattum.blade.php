@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="container">
            <h1 style="color: black" class="mt-5 text-center">Cadastrar Pecado</h1>
        </div>
        <form action="{{route('salvarPecattum')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomePecattum">Nome:</label>
                <input type="text" class="form-control" name="nomePecattum">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" name="descricao">
                <label for="karma">Karma:</label>
                <input class="form-control-range" name="karma" type="range">
            </div>
            <button type="submit" class="btn btn-dark">Salvar</button>
            <button onclick="window.location.href='{{route('home')}}'" type="button" 
                    class="btn btn-danger">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection 