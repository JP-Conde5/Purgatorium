@extends('layout')
@section('content')
<div class="card border">
    @if(session()->get('danger'))
        <div class="alert alert-danger">
            {{session()->get('danger')}}
        </div><br/>
    @elseif(session()->get('success'))>
        <div class="alert alert-success">
            {{session()-get('success')}}
        </div><br/>
    @endif
    <a href="formcadpecattum" type="button" class="btn btn-primary" style="backgroundcolor:'gray'" >Cadastrar novo pecado</a>


        <h5 class="card-title" style="text-align: center">Pecados cadastrados</h5>
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
                        <td>{{ $item-id  }}</td>
                        <td>{{ $item->nomePecado }}</td>
                        <td>{{ $item-descricao  }}</td>
                        <td>{{ $item-karma  }}</td>
                        <td style="text-align:center">
                            <a href="rotaeditarpecado"></a>
                        </td>
                        <td style="text-align:center">
                            <a href="rotadeletarpecado" 
                            onclick="return confirm('Tem certeza que deseja remover?');">Deletar</a>       
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    

    </div>
</div>
@endsection
