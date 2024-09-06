@extends('layout')
@section('content')
<div class="card border">
    @if(session()->get('danger'))
        <div class="alert alert-danger">
            {{session()->get('danger')}}
        </div><br/>
    @elseif(session()->get('success'))
        <div class="alert alert-success">
            {{session()-get('success')}}
        </div>
    @endif
</div>
<div class="title-button">
    <h3 class="card-title">Virtus de {{$dados->nome}}</h3>
    <a href="{{route('criarMortalisVirtus')}}" type="button" class="btn btn-dark" style="backgroundcolor:'gray'">Vincular virtudes</a>
</div>
    <div class="secao">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Karma</th>
                    <th style="text-align:center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $item)
                <tr>
                    <td>{{ $item->id  }}</td>
                    <td>{{ $item->nomeVirtus }}</td>
                    <td>{{ $item->karma }}</td>
                    <td style="text-align:center">
                        <a class="btn btn-danger" href="/deletarVirtus/{{$item['id']}}" onclick="return confirm('Tem certeza que deseja remover?');">Desonrar</a>       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
@endsection