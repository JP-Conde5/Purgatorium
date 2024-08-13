<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerVirtus extends Controller
{
    public function index(){
        $dados = Virtu::all();
        return view('exibirVirtus', compact('dados'));
    }
    public function create(){
        return view('novoVirtus');
    }
    public function store(Request $request){
        $dados = new Virtu;
        $dados->nomeVirtus = $request->input('nomeVirtus');
        $dados->descricao = $request->input('descricao');
        $dados->karma = $request->input('karma');
        if($dados->save())
            return redirect('/exibirVirtus')->with('sucess', '"Amai os outros como a ti mesmo" - Manoel Gomes');
        return redirect('/exibirVirtus')->with('danger', 'Erro ao cadastrar virtude...');
    }
    public function edit(string $id){
        $dados = Virtu::find($id);
        if(isset($dados))
            return view('editarVirtus', compact('dados'));
        return redirect('/exibirVirtus')->with('danger', 'Esta virtude não existe');
    }
}
