@extends('layout')
@section('content')
<div class='container py-4' style="color: black">
<div class='card border'>
    <div class="card-body">
        <div class="container">
            <h1 class="mt-5 text-center" style="color: black">Virtus</h1>
        </div>
        <form 
         action="{{route('salvarVirtus')}}">
            @csrf
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input class="form-control" name="nomeVirtus" type="text">
            </div>
            <br>
            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <input class="form-control" name="descricao" type="text">
            </div>
            <br>
            <div class="form-group">
                <label for="karma">Karma: </label>
                <input class="form-control-range" name="karma" type="range">
            </div>
            <br>
            <div class="buttons">
                <button class="btn btn-dark" type="submit">Servare</button>
                <a class="btn btn-danger" href="{{route('exibirVirtus')}}">Cancel</a>
            </div>
        </form>
    </div>
</div>
</div>
@endsection