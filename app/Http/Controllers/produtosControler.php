<?php

namespace App\Http\Controllers;

use App\Models\listando;
use App\Models\produtos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class produtosControler extends Controller
{
    public function adicionarprodutos(listando $loja,  $loja_id)
    {
        return view('lojas.adicionarproduto',['info' => [listando::find($loja_id)->Titulo, $loja_id]]);
    }
    public function criarproduto(Request $req)
    {
        // dd($req['loja_id']);
        $forms = $req -> validate([
            'Titulo' => 'required',
            'Preco' => 'required',
        ]);
        if($req['Descri'] == "")
        {
            $forms['Descri'] = "null";
        }
        $forms['loja_id'] = $req['loja_id'];
        
        
        produtos::create($forms);

        return redirect('/lojas/controle')->with('message','Produto Adicionado!');
    }
}
