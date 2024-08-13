<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerMortalis extends Controller
{
  public function index(){
    $dados = Agenda::all();
    return view('');
  }   
  public function create(){
    return view('');
  }
  public function store(Request $request){
    $dados = new Agenda();
    $dados ->nomeMortalis = $request->input('nomeMortalis');
    $dados ->nomeFilosofo = $request->input('filosofoPreferido');
    $dados ->timeCoracao  = $request->input('timeCoracao');
    $dados ->nacionalidade = $request->input('nacionalidade');
    $dados ->religiao = $request->input('religiao');
    $dados ->virtus = $request->input('Virtus');
    $dados ->Pecattum = $request->input('Pecattum');
  }
  public function edit(string $id){
     $dados = Agenda::find($id);
     if(isset($dados)){
        return view('');

     }
  }
  public function update(Request $request, string $id){
    $dados = Agenda::find($id);
    if(isset($dados)){
    $dados ->nomeMortalis = $request->input('nomeMortalis');
    $dados ->nomeFilosofo = $request->input('filosofoPreferido');
    $dados ->timeCoracao  = $request->input('timeCoracao');
    $dados ->nacionalidade = $request->input('nacionalidade');
    $dados ->religiao = $request->input('religiao');
    $dados ->virtus = $request->input('Virtus');
    $dados ->Pecattum = $request->input('Pecattum');
    $dados ->save();
     return redirect('/Baptismus')->with('sucess','Confissão realizada');
  }
    
    }
  }

