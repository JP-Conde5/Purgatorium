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
 <body style="background-color:grey; background-image: url('')">
   <div class='Div-1' style=" width:50rem;">
   <a style="color: white; font-size:2rem"> No purgatório, o tempo arrasta-se como um castigo, enquanto a alma busca a expiação sem garantia de alcançá-la, receba -Luva de Pedreiro </a>
</div>
</body>
@endsection

    