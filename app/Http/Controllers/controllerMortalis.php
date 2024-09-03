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
    $dados ->nomeMortalis = $request->input('nomeMortalis');
    $dados ->nomeFilosofo = $request->input('filosofoPreferido');
    $dados ->timeCoracao  = $request->input('timeCoracao');
    $dados ->nacionalidade = $request->input('nacionalidade');
    $dados ->religiao = $request->input('religiao');
    $dados ->virtus = $request->input('Virtus');
    $dados ->Pecattum = $request->input('Pecattum');
    $dados ->save();
     return redirect('/Editarmortalis')->with('success','Confissão realizada');
    }
  }
}
