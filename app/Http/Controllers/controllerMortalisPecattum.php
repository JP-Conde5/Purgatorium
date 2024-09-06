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
        $dados->nome = $mortalis->nome;
        foreach($dados as $item){
            $mortalis = Pecattum::find($item->idPecattum);
            $item->nome = $mortalis->nome;
        }
        return view('exibirDetalhesMortalis', compact('dados'));
    }

    public function store(Request $request)
    {
        $dados = new MortalisPecattum();
        $dados->idMortalis = $request->input('idMortalis');
        $dados->idPecattum = $request->input('idPecattum');
        if($dados->save())
            return redirect('/livro')->with('success', 'A queda do Sol já se reserva para alguns');
        return redirect('/livro')->with('danger', 'Erro: Não esqueça, calúnia também é pecado');
    }

    public function destroy(string $id)
    {
        $dados = MortalisPecattum::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/livro')->with('success', 'O perdão é uma das maiores virtudes');
        }
        return redirect('/livro')->with('danger', 'Erro: O perdão sem fronteiras é para os passivos, não pacifistas');
    }
}