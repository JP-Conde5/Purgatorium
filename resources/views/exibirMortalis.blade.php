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
    <h5 class="card-title" style="text-align: center">Mortais</h5>
    <a href="{{route('criarMortalis')}}" type="button" class="btn btn-dark">Cadastrar Mortal</a>
</div>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Morte</th>
                <th>Religião</th>
                <th>Time do Coração</th>
                <th>Filósofo Preferido</th>
                <th>Nacionalidade</th>
                <th>Karma</th>
                <th>Destino</th>
                <th style="text-align:center" colspan="4">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nomeMortalis }}</td>
                <td>{{ $item->filosofoPreferido }}</td>
                <td>{{ $item->timeCoracao }}</td>
                <td>{{ $item->nacionalidade }}</td>
                <td>{{ $item->religiao }}</td>
                <td>{{ $item->karma }}</td>
                <td>
                    <a href="/exibirMortalisVirtus/{{$item['id']}}">Virtudes</a>
                </td>
                <td>
                    <a href="/exibirMortalisPecattum/{{$item['id']}}">Pecados</a>
                </td>
                <td style="text-align:center">
                    <a href="/editarMortalis/{{$item['id']}}">Editar</a>
                </td>
                <td style="text-align:center">
                    <a href="/deletarMortalis/{{$item['id']}}" onclick="return confirm('Tem certeza que deseja remover?');">Deletar</a>       
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
@endsection