@extends('layout')
@section('content')
<div class="card border">
    @if(session()->get('danger'))
        <div class="alert alert-danger">
            {{session()->get('danger')}}
        </div><br/>
    @elseif(session()->get('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
</div>
<div class="title-button">
    <h3 class="card-title">Pecados</h5>
    <a href="{{route('criarPecattum')}}" type="button" class="btn btn-dark" style="backgroundcolor:'gray'">Cadastrar pecados</a>
</div>
    <div class="secao">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Karma</th>
                    <th style="text-align:center" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $item)
                <tr>
                    <td>{{ $item->id  }}</td>
                    <td>{{ $item->nomePeccatum }}</td>
                    <td>{{ $item->descricao }}</td>
                    <td>{{ $item->karma }}</td>
                    <td style="text-align:center">
                        <a class="btn btn-dark" href="/editarPecattum/{{$item['id']}}">Editar</a>
                    </td>
                    <td style="text-align:center">
                        <a class="btn btn-danger" href="/deleterPecattum/{{$item['id']}}" onclick="return confirm('Tem certeza que deseja remover?');">Deletar</a>       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
@endsection