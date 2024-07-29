<?php

namespace App\Http\Controllers;

use App\Models\listando;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\produtos;
use Illuminate\Contracts\Session\Session;

use function Laravel\Prompts\alert;

class controledelistas extends Controller
{
    //mostrar todas as lojas
    public static function index()
    {
        return view('lojas.index',[
            // 'listas' => listando::all()
            //sem paginação
            // 'listas' => listando::latest()->filter(request(['tag','search']))->get()
            //com paginação
            // 'listas' => listando::latest()->filter(request(['tag','search']))->simplePaginate(2)
            'listas' => listando::latest()->filter(request(['tag','search']))->simplePaginate(50)
        ]);
    }
    //dentro da loja
    public function show(listando $listando, produtos $produtos)
    {
        return view("lojas.escolhido",[
            'list' => $listando,
            'product' => $produtos
        ]);
    }
    //to - do
    //criar
    public function create()
    {
        return view('lojas.criarloja');
    }
    //criar produto
    public function adicionarprodutos(listando $loja,  $loja_id)
    {
        return view('lojas.adicionarproduto',['info' => [listando::find($loja_id)->Titulo, $loja_id]]);
    }
    public function criarproduto(Request $req)
    {
        // dd($req);
        $forms = $req -> validate([
            'Titulo' => 'required',
            'Preco' => 'required',
        ]);
        if($req['Descri'] == "")
        {
            $forms['Descri'] = "Sem descrição";
        }
        $form['loja_id'] = $req['loja_id'];
        
        produtos::create($forms);

        return redirect('/lojas/controle')->with('message','Produto Adicionado!');
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

        if($request->hasFile('logo'))
        {
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }
        
        $formFields['user_id'] = auth()->id();

        listando::create($formFields);

        // Session::flash('message','Loja criada!');

        // return redirect('/');
        return redirect('/')->with('message','Loja criada!');
    }

    //editar
    public function edit(listando $listando)
    {
        return view('lojas.editar',['info' => $listando]);
    }

    //atualizar
    public function update(Request $request, listando $lista, $listando)
    {
        //logado é o dono
        // dd($lista);
        if(listando::find($listando)->user_id !== auth()->id())
        {
            return abort(403,'Ação não autorizada');
        }

        $formFields = $request -> validate([
            'Titulo' => 'required',
            'empresa' => ['required'],
            'local' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'descri' => 'required'
        ]);

        if($request->hasFile('logo'))
        {
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }
        
        $item = $lista -> find($listando);
        $item -> update($formFields);
        // $lista->update($formFields);

        // Session::flash('message','Loja criada!');

        // return redirect('/');
        return back()->with('message','Loja atualizada!');
    }

    //deletar
    public function deletarLoja(Request $req, listando $lista, $listando, User $use)
    {
        // dd($lista->scopebuscarLoja($listando));
        // dd(listando::find($listando)->user_id);

        if(listando::find($listando)->user_id !== auth()->id())
        {
            return abort(403,'Ação não autorizada');
        }

        $item = $lista -> find($listando);
        $item -> delete();
        return redirect('/') -> with('message', 'Loja deletada!');
    }

    //controle de lojas individual
    public function controleLojas()
    {
        return view('lojas.controle',['info' => auth()->user()->lojas()->get()]);
    }

    //vizualização geral
    public function vizualizando()
    {
        return view('lojas.vizualizando', ['lojas' => listando::class, 'users' => User::all()]);
    }

}

