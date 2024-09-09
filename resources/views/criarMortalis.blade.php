@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="container">
            <h1 class="mt-5 text-center" style="color:black">Baptismo</h1>
        </div>
        <form action="{{route('salvarMortalis')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome"
                        placeholder="Informe seu nome">
            </div>
            <br>
            <div class="form-group">
                <label for="anoMorte">Ano de Morte:</label>
                <input type="text" class="form-control" name="anoMorte"
                    placeholder="Informe seu nome">
            </div>
            <br>
            <div>
                <label for="filosofo">Filosofo preferido(Não pode ser Sartre):</label>
                <input type="text" class="form-control" name="filosofo" 
                       placeholder="Informe o nome do filósofo">
            </div>
            <br>
            <div>
                <label for="time">Time preferido:</label>
                <input type="text" class="form-control" name="time" 
                       placeholder="Informe o nome do time favorito">
            </div>
            <br>
            <div>
                <label for="nacionalidade">Nacionalidade:</label>
                <input type="text" class="form-control" name="nacionalidade" 
                        placeholder="Informe a nacionalidade do humano">
            </div>
            <br>
            <div>    
                <label for="religiao">Religiao:</label>
                <input type="text" class="form-control" name="religiao" 
                        placeholder="Informe a religiao">
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