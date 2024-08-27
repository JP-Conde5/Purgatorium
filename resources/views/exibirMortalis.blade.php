@extends('layout')
@section('content')
<h5 class="card-title" style="text-align: center">Virtudes</h5>
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
                <td>{{ $item->nomeMortalis }}</td>
                <td>{{ $item->filosofoPreferido }}</td>
                <td>{{ $item->timeCoracao }}</td>
                <td>{{ $item->nacionalidade }}</td>
                <td>{{ $item->religiao }}</td>
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
