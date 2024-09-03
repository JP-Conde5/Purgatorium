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
<h5 class="card-title" style="text-align: center">Virtudes</h5>
    <a href="formcadpecattum" type="button" class="btn btn-primary" style="backgroundcolor:'gray'" >Cadastrar humano</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Karma</th>
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
                    <a href="/virtusMortalis/{{$item['id']}}">Virtudes</a>
                </td>
                <td>
                    <a href="/pecattumMortalis/{{$item['id']}}">Pecados</a>
                </td>
                <td style="text-align:center">
                    <a href="/editarMortalis/{{$item['id']}}">Editar</a>
                </td>
                <td style="text-align:center">
                    <a href="/delete/{{$item['id']}}" onclick="return confirm('Tem certeza que deseja remover?');">Deletar</a>       
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
