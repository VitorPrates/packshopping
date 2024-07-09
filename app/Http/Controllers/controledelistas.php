<?php

namespace App\Http\Controllers;

use App\Models\listando;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class controledelistas extends Controller
{
    //mostrar todas as lojas
    public static function index()
    {
        return view('lojas.index',[
            // 'listas' => listando::all()
            'listas' => listando::latest()->filter(request(['tag','search']))->get()
        ]);
    }
    //dentro da loja
    public function show(listando $listando)
    {
        return view("lojas.escolhido",[
            'list' => $listando
        ]);
    }
    //to - do
    //criar
    public function create()
    {
        return view('lojas.criarloja');
    }


    //armazenar - loja criada - sotre
    public function lojacriada(Request $request)
    {
        $formFields = $request -> validate([
            'Titulo' => 'required',
            'empresa' => ['required', Rule::unique('listas_tabela','empresa')],
            'local' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'descri' => 'required'
        ]);
        listando::create($formFields);
        return redirect('/');
    }

    //editar
    //atualizar
    //deletar
}
