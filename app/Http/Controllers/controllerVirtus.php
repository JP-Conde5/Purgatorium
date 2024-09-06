<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Virtu;
use App\Models\MortalisVirtu;

class controllerVirtus extends Controller
{
    public function index(){
        $dados = Virtu::all();
        return view('exibirVirtus', compact('dados'));
    }
    public function create(){
        return view('criarVirtus');
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
    public function update(Request $request, $id){
        $dados = Virtu::find($id);
        if(isset($dados)){
            $dados->nomeVirtus = $request->input('nomeVirtus');
            $dados->descricao = $request->input('descricao');
            $dados->karma = $request->input('karma');
            $dados->save();
            return redirect('/exibirVirtus')->with('success', 'Virtude atualizado com sucesso');
        }
        return redirect('/exibirVirtus')->with('danger', 'Erro ao tentar atualizar virtude');
    }

    public function destroy(string $id){
        $dados = Virtu::find($id);
        if(isset($dados)){
            //Tem algum mortal com essa virtude?
            $mortalis = MortalisVirtu::where('idVirtus', '=', $id)->first();
            if(!isset($mortalis)){
                $dados->delete();
                return redirect('/exibirVirtus')->with('sucess', '"Na natureza nada se cria, nada se perde, tudo se transforma" - Supla');
            }else{
                return redirect('/exibirVirtus')->with('danger', 'Essa virtude não pode ser apagada, há mortais possuidores dela');
            }
        }else{
            return redirect('/exibirVirtus')->with('danger', 'Virtude contra os mandamentos reais do site');
        }
    }
}
