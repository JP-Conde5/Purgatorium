@extends('layout')
@section('content')
<div class='jumbotron'>
    <h5 class="card-title" style="text-align: center">Virtus</h5>
    <form method="post" action="{{route('salvarVirtus')}}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input name="nomeVirtus" type="text">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição: </label>
            <input name="descricao" type="text">
        </div>
        <div class="form-group">
            <label for="karma">Karma: </label>
            <input class="form-control-range" name="karma" type="range">
        </div>
        <button class="btn btn-dark" type="submit">Servare</button>
        <a class="btn btn-danger" href="{{route('exibirVirtus')}}">Cancel</a>
    </form>
</div>
@endsection