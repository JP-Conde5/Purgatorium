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
<h3 class="card-title" class="title">Virtudes</h5>
    <a href="formcadpecattum" type="button" class="btn btn-primary" style="backgroundcolor:'gray'" >Cadastrar virtudes</a>
    <table>
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
                    <a href="/exibirVirtus/{{$item['id']}}"></a>
                </td>
                <td style="text-align:center">
                    <a href="/deleterVirtus/{{$item['id']}}" onclick="return confirm('Tem certeza que deseja remover?');">Deletar</a>       
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    

@endsection