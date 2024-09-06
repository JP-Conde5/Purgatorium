@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
            <div class="jumbotron jumbotron-fluid">
                <div class="container-fluid">
                    <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO PECADO DESEJADO DESEJADO</h1>
                </div>
            </div>
            <form action="{{ route('atualizarPecattum', ['id' => $dados->id])}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomePecattum">Nome:</label>
                    <input type="text" class="form-control" name="nomePecattum" 
                        value="{{$dados->nomePecattum}}">
                </div>
                <div class="form-group">
                    <label for="nome">Descrição:</label>
                    <input type="text" class="form-control" name="descricao" 
                        value="{{$dados->descricao}}">
                </div>
                </div class="form-group">
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