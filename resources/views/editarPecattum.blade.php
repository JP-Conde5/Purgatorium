@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="container">
            <h1 class="mt-5 text-center" style="color: black">Editar Pecado</h1>
        </div>
        <form action="{{ route('atualizarPecattum', ['id' => $dados->id])}}" method="post">
            @csrf
            <div class="form-group">
               <label for="nomePecattum">Nome:</label>
                <input type="text" class="form-control" name="nomePecattum" 
                    value="{{$dados->nomePecattum}}">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Descrição:</label>
                <input type="text" class="form-control" name="descricao" 
                    value="{{$dados->descricao}}">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Karma:</label>
                <input type="range" class="form-control-range" name="karma" 
                    value="{{$dados->karma}}">
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