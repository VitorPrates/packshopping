<link rel="stylesheet" href={{ asset('css/styles.css') }}>
<div class="produto_view_main">
    <div class="top_view_produto">
        <h1>{{$produto->Titulo}}</h1>
        <h2>{{$loja["Titulo"]}}</h2>    
    </div>
    <div class="sobre-o-produto">
        <div class="descricao-preco">
            <h3>Sobre o Produto</h3>
            <p>
                {{$produto->Descri == "null" ? "O vendedor não inseriu descrição" : $produto->Descri}}
            </p>
            {{-- <h2>R${{number_format($produto->Preco, 2, ',', '.') }}</h2> --}}
            <h2>R${{$produto->Preco}}</h2>
            <div class="btns">
                <button>Comprar</button>
                <button>Carrinho</button>
            </div>
        </div>
        <div class="fotos-produto">
            <img src="{{asset('/img/no-image.png')}}" alt="" srcset="">
        </div>
    </div>
    <button class="sair_loja" onclick="history.back()">Voltar</button>
</div>
    
    
