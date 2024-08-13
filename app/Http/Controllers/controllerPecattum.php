<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerPecattum extends Controller
{
    public function index(){
        $dados = Pecattum::all();
        return view('exibirpecattum', compact('dados'));
    }

    public function create(){
        return view('novopecado');
    }

    public function store(Request $request){
        $dados = new Pecattum();
        $dados->nomePecado = $request->input('nomePecado');
        $dados->descricao = $request->input('descricao');
        $dados->karma = $request->input('karma');
        $dados->save();
        return direct('rotapecado')->with('success', 'Novo pecado cadastrado com sucesso.');
    }

    public function edit(string $id){
        $dados = Pecattum::find($id);
        if(isset($dados)){
            return view('editarPecado', compact('dados'));
        }
    }

    public function update(Request $request, string $id){
        $dados = Pecattum::find($id);
        if(isset($dados)){
            $dados->nomePecattum = $request->input('nomePecattum');
            $dados->descricao = $request->input('descricao');
            $dados->karma = $request->input('karma');
            $dados->save();
            return redirect('/rotapecado')->with('success', 'Pecado atualizado com sucesso');
        }
        return redirect('/rotapecado')->with('danger', 'Erro ao tentar atualizar pecado');
    }

    public function destroy(string $id){
        $dados = Pecattum::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/rotapecado')->with('success', 'Pecado excluído com sucesso');
        }
        return redirect('/rotapecado')->with('danger', 'Falha ao deletar');
    }
 
    public function procurarPecado(Request $request){
        $nome = $request->input('nomePecattum');
    }
}
