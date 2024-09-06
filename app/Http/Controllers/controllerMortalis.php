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
    $dados ->nomeMortalis = $request->input('nomeMortalis');
    $dados ->dataMorte = $request->input('dataMorte');
    $dados ->nomeFilosofo = $request->input('filosofoPreferido');
    $dados ->timeCoracao = $request->input('timeCoracao');
    $dados ->nacionalidade = $request->input('nacionalidade');
    $dados ->religiao = $request->input('religiao');
    $dados ->virtus = $request->input('Virtus');
    $dados ->Pecattum = $request->input('Pecattum');
    if($dados->save()){
      return redirect('/exibirMortalis')->with('sucess','E disse Deus: Façamos o homem à nossa imagem, conforme a nossa semelhança; e domine sobre os peixes do mar, e sobre as aves dos céus, e sobre o gado, e sobre toda a terra, e sobre todo o réptil que se move sobre a terra.');
    }
    return redirect('/exibirMortalis')->width('danger','Erro: e assim surge os Santos Inocentes');
  }

  public function edit(string $id){
     $dados = Mortali::find($id);
     if(isset($dados)){
        return view('');
     }
  }
  public function update(Request $request, string $id){
    $dados = Mortali::find($id);
    if(isset($dados)){
      $dados->nomeMortalis = $request->input('nomeMortalis');
      $dados->dataMorte = $request->input('dataMorte');
      $dados->filosofo = $request->input('filosofo');
      $dados->time = $request->input('time');
      $dados->nacionalidade = $request->input('nacionalidade');
      $dados->religiao = $request->input('religiao');
      if($dados ->save())
        return redirect('/editarMortalis')->with('success','Confissão realizada');
    }
  }

  public function destroy(string $id){
    $dados = Mortali::find($id);
    if(isset($dados)){
        $dados->delete();
        return redirect('/exibirPecattum')->with('success', 'A morte não é nada para nós, pois, 
        quando existimos, não existe a morte, e quando existe a morte, não existimos mais.');
    }
    return redirect('/exibirMortalis')->with('danger', 'Falha ao deletar');
}

}
