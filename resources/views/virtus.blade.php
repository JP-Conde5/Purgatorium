@extends('layout')
@section('content')
<a href="formcadpecattum" type="button" class="btn btn-primary" style="backgroundcolor:'gray'" >Cadastrar virtudes</a>


<h5 class="card-title" style="text-align: center">Virtudes</h5>
    <table>
        <thead>
            <tr>
            <a href="formcadpecattum" type="button" class="btn btn-primary" style="backgroundcolor:'gray'" >Cadastrar nova virtude </a>


<h5 class="card-title" style="text-align: center">Virtudes cadastradas</h5>
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
                <td>{{ $item->nomeVirtude }}</td>
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
                    <a href="rotaeditarvirtude"></a>
                </td>
                <td style="text-align:center">
                    <a href="rotadeletarvirtude" 
                    onclick="return confirm('Tem certeza que deseja remover?');">Deletar</a>       
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    

</div>
</div>
@endsection