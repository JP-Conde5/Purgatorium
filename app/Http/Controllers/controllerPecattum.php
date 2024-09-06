<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pecattum;
use App\Models\MortalisPecattum;


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
        if($dados->save())
            return redirect('/exibirPecattum')->with('success', 'Novo pecado cadastrado com sucesso.');
        return redirect('/exibirPecattum')->width('danger', 'Mais um pecado ao cadastrar pecado');    
    }

    public function edit(string $id){
        $dados = Pecattum::find($id);
        if(isset($dados)){
            return view('/editarPecattum', compact('dados'));
        }
    }

    public function update(Request $request, $id){
        $dados = Pecattum::find($id);
        if(isset($dados)){
            $dados->nomePecattum = $request->input('nomePecattum');
            $dados->descricao = $request->input('descricao');
            $dados->karma = $request->input('karma');
            $dados->save();
            return redirect('/exibirPecattum')->with('success', 'Pecado atualizado com sucesso');
        }
        return redirect('/exibirPecattum')->with('danger', 'Erro ao tentar atualizar pecado');
    }

    public function destroy(string $id){
        $dados = Pecattum::find($id);
        if(isset($dados)){
            //Tem algum mortal com esse pecado?
            $mortalis = MortalisPecattum::where('idPecattum', '=', $id)->first();
            if(!isset($mortalis)){
                $dados->delete();
                return redirect('/exibirPecattum')->with('sucess', '"Na natureza nada se cria, nada se perde, tudo se transforma" - Supla');
            }else{
                return redirect('/exibirPecattum')->with('danger', 'Esse pecado não pode ser apagado, há mortais se auto-punindo com ele');
            }
            $dados->delete();
            return redirect('/exibirPecattum')->with('success', 'Pecado excluído com sucesso');
        }
        return redirect('/exibirPecattum')->with('danger', 'Falha ao deletar');
    }
 
    public function procurarPecado(Request $request){
        $nome = $request->input('nomePecattum');
    }
}
