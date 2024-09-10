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
    <h3 class="card-title">Mortais</h3>
    <a href="{{route('criarMortalis')}}" type="button" class="btn btn-dark">Cadastrar Mortal</a>
</div>
    <div class="secao">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ano de Morte</th>
                    <th>Religião</th>
                    <th>Filósofo Preferido</th>
                    <th>Time do Coração</th>
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
                    <td>{{ $item->anoMorte }}</td>
                    <td>{{ $item->religiao }}</td>
                    <td>{{ $item->filosofo }}</td>
                    <td>{{ $item->time }}</td>
                    <td>{{ $item->nacionalidade }}</td>
                    <td>{{ $item->karma }}</td>
                    <td>{{ $item->destination}}</td>
                    <td>
                        <a class="btn btn-light" href="/exibirMortalisVirtus/{{$item['id']}}">Virtudes</a>
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="/exibirMortalisPecattum/{{$item['id']}}">Pecados</a>
                    </td>
                    <td style="text-align:center">
                        <a class="btn btn-dark" href="/editarMortalis/{{$item['id']}}">Editar</a>
                    </td>
                    <td style="text-align:center">
                        <a class="btn btn-danger" href="/deletarMortalis/{{$item['id']}}" onclick="return confirm('Tem certeza que deseja remover?');">Deletar</a>       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>  
    </div>
@endsection