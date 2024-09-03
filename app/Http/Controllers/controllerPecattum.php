<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pecattum;

class controllerPecattum extends Controller
{
    public function index(){
        $dados = Pecattum::all();
        return view('/exibirPecattum', compact('dados'));
    }

    public function create(){
        return view('/criarPecattum');
    }

    public function store(Request $request){
        $dados = new Pecattum();
        $dados->nomePecattum = $request->input('nomePecattum');
        $dados->descricao = $request->input('descricao');
        $dados->karma = $request->input('karma');
        $dados->save();
        return direct('/exibirPecattum')->with('success', 'Novo pecado cadastrado com sucesso.');
    }

    public function edit(string $id){
        $dados = Pecattum::find($id);
        if(isset($dados)){
            return view('/editarPecattum', compact('dados'));
        }
    }

    public function update(Request $request, string $id){
        $dados = Pecattum::find($id);
        if(isset($dados)){
            $dados->nomePecattum = $request->input('nomePecattum');
            $dados->descricao = $request->input('descricao');
            $dados->karma = $request->input('karma');
            $dados->save();
            return redirect('/editarPecattum')->with('success', 'Pecado atualizado com sucesso');
        }
        return redirect('/exibirPecattum')->with('danger', 'Erro ao tentar atualizar pecado');
    }

    public function destroy(string $id){
        $dados = Pecattum::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/exibirPecattum')->with('success', 'Pecado excluído com sucesso');
        }
        return redirect('/exibirPecattum')->with('danger', 'Falha ao deletar');
    }
 
    public function procurarPecado(Request $request){
        $nome = $request->input('nomePecattum');
    }
}
