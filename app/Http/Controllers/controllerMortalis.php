<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mortali;

class controllerMortalis extends Controller
{
  public function index(){
    $dados = Mortali::all();
    return view('/exibirMortalis', compact('dados'));
  }   
  public function create(){
    return view('/criarMortalis');
  }
  public function store(Request $request){
    $dados = new Mortali();
    $dados->nomeMortalis = $request->input('nome');
    $dados->anoMorte = $request->input('anoMorte');
    $dados->filosofo = $request->input('filosofo');
    $dados->time = $request->input('time');
    $dados->nacionalidade = $request->input('nacionalidade');
    $dados->religiao = $request->input('religiao');
    $dados->karma = 0;
    $dados->destination = "Julgamento em andamento";
    if($dados->save()){
      return redirect('/exibirMortalis')->with('sucess','E disse Deus: Façamos o homem à nossa imagem, conforme a nossa semelhança; e domine sobre os peixes do mar, e sobre as aves dos céus, e sobre o gado, e sobre toda a terra, e sobre todo o réptil que se move sobre a terra.');
    }
    return redirect('/exibirMortalis')->width('danger','Erro: e assim surge os Santos Inocentes');
  }

  public function edit(string $id){
     $dados = Mortali::find($id);
     if(isset($dados)){
        return view('editarMortalis', compact('dados'));
     }
  }
  public function update(Request $request, string $id){
    $dados = Mortali::find($id);
    if(isset($dados)){
      $dados->nomeMortalis = $request->input('nome');
      $dados->anoMorte = $request->input('anoMorte');
      $dados->filosofo = $request->input('filosofo');
      $dados->time = $request->input('time');
      $dados->nacionalidade = $request->input('nacionalidade');
      $dados->religiao = $request->input('religiao');
      if($dados ->save())
        return redirect('/exibirMortalis')->with('success','Correção realizada');
      return redirect('/exibirMortalis')->with('danger','Erro: Correção está errada');
    }
    return redirect('/exibirMortalis')->with('danger','Erro: sem mortal para esse código');
  }

  public function destroy(string $id){
    $dados = Mortali::find($id);
    if(isset($dados)){
        
        $dados->delete();
        return redirect('/exibirMortalis')->with('success', 'A morte não é nada para nós, pois, 
        quando existimos, não existe a morte, e quando existe a morte, não existimos mais.');
    }
    return redirect('/exibirMortalis')->with('danger', 'Falha ao deletar');
}

}
