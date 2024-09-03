@extend('layout')
@section('content')
<h3 class="card-title">Mortalis - Virtus</h3>
<form action="{{route('virtusMortalis')}}">
    <div class="form-group">
        <label for="virtude">Cadatre mais alguma virtude: </label>
        <select name="virtude">
            @foreach($virtudes as $item)
            <option value="{{$vitude->id}}">$virtudes->nomeVirtus</option>
            @endforeach
            <button class="btn btn-dark" type="submit">Testemunhar</button>
        </select>
    </div>
</form>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Karma</th>
                    <th style="text-align:center">Ação</th>
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
                        <a class="btn btn-dark" href="/deleterVirtus/{{$item['id']}}" onclick="return confirm('Tem certeza que deseja remover?');">Desmentir</a>       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
@endsection