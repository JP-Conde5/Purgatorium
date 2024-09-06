@extends('layout')
@section('content')

<div class="title-button">
    <h3 class="card-title">Virtus</h3>
    <a href="{{route('criarVirtus')}}" type="button" class="btn btn-dark" style="backgroundcolor:'gray'">Cadastrar virtudes</a>
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
                    <td>{{ $item->nomeVirtus }}</td>
                    <td>{{ $item->descricao }}</td>
                    <td>{{ $item->karma }}</td>
                    <td style="text-align:center">
                        <a class="btn btn-dark" href="/editarVirtus/{{$item['id']}}">Editar</a>
                    </td>
                    <td style="text-align:center">
                        <a class="btn btn-danger" href="/deletarVirtus/{{$item['id']}}" onclick="return confirm('Tem certeza que deseja remover?');">Deletar</a>       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
@endsection