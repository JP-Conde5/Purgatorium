<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mortali;
use App\Models\Pecattum;
use App\Models\MortalisPecattum;
use Illuminate\Support\Facades\DB;

class controllerMortalisPecattum extends Controller
{
    private $MortalisPecattum;

    public function __construct(MortalisPecattum $item){
        $this->MortalisPecattum = $item;
    }

    public function index($id)
    {
        $dados = $this->MortalisPecattum->where('idMortalis', $id)->get();
        $mortalis = Mortali::find($id);
        $dados->idMortalis = $id;
        $dados->nomeMortalis = $mortalis->nomeMortalis;
        foreach($dados as $item){
            $pecattum = Pecattum::find($item->idPecattum);
            $item->nomePecattum = $pecattum->nomePecattum;
            $item->karma = $pecattum->karma;
        }
        $pecattum = Pecattum::all();
        return view('exibirMortalisPecattum', compact('dados','pecattum'));
    }

    public function store(Request $request)
    {
        $dados = new MortalisPecattum();
        $dados->idMortalis = $request->input('idMortalis');
        $dados->idPecattum = $request->input('idPecattum');
        if($dados->save())
            return redirect('/exibirMortalis')->with('success', 'A maculação está em todos os mortais');
        return redirect('/exibirMortalis')->with('danger', 'Erro: Lembre-se - calúnia também é um pecado');
    }

    public function destroy(string $id)
    {
        $dados = MortalisPecattum::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/exibirMortalis')->with('success', 'O perdão é algo a ser praticado em todas as realidades da vida');
        }
        return redirect('/exibirMortalis')->with('danger', 'Erro: Não facilite muito, pois pode ser um erro');
    }
}