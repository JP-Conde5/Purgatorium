<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mortali;
use App\Models\Virtu;
use App\Models\MortalisVirtu;
use Illuminate\Support\Facades\DB;

class controllerMortalisVirtus extends Controller
{
    private $MortalisVirtu;

    public function __construct(MortalisVirtu $item){
        $this->MortalisVirtu = $item;
    }

    public function index($id)
    {
        $dados = $this->MortalisVirtu->where('idMortalis', $id)->get();
        $mortalis = Mortali::find($id);
        $dados->idMortalis = $id;
        $dados->nomeMortalis = $mortalis->nomeMortalis;
        foreach($dados as $item){
            $virtus = Virtu::find($item->idVirtus);
            $item->nomeVirtus = $virtus->nomeVirtus;
            $item->karma = $virtus->karma;
        }
        $virtus = Virtu::all();
        return view('exibirMortalisVirtus', compact('dados','virtus'));
    }

    public function store(Request $request)
    {
        $dados = new MortalisVirtu();
        $dados->idMortalis = $request->input('idMortalis');
        $dados->idVirtus = $request->input('idVirtus');
        if($dados->save())
            return redirect('/exibirMortalis')->with('success', 'A honra se encontra naqueles que são justos');
        return redirect('/exibirMortalis')->with('danger', 'Erro: Talvez não seja digno de tamanha virtude');
    }

    public function destroy(string $id)
    {
        $dados = MortalisVirtu::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/exibirMortalis')->with('success', 'A ruína está na perda de suas caracteríscas de bondade infantil');
        }
        return redirect('/exibirMortalis')->with('danger', 'Erro: Não tire essa beleza dele');
    }
}