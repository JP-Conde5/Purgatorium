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
<div class="title-button">
    <h3 class="card-title">Virtudes de {{$dados->nomeMortalis}}</h3>
    <div class="insert">
    <form action="{{route('salvarMortalisVirtus')}}" method="post">
        @csrf
        <input type="hidden" name="idMortalis" value="{{$dados->idMortalis}}">
        <div class="input-group mb-3">
            <select name="idVirtus" style="color:black; width: 10rem; font-size:1rem" class="custom-select" id="inputGroupSelect01">
                @foreach($virtus as $item)
                    <option style="color: black" value="{{$item->id}}">{{$item->nomeVirtus}}</option>
                @endforeach
             </select>
        </div>
        <button type="submit" class="btn btn-dark">Vincular virtudes</a>
        </form>
    </div>
</div>
</div>
    <div class="secao">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Karma</th>
                    <th style="text-align:center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $item)
                <tr>
                    <td>{{ $item->idVirtus  }}</td>
                    <td>{{ $item->nomeVirtus }}</td>
                    <td>{{ $item->karma }}</td>
                    <td style="text-align:center">
                        <a class="btn btn-danger" href="/deletarMortalisVirtus/{{$item->id}}" onclick="return confirm('Tem certeza que deseja remover?');">Desonrar</a>       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
@endsection