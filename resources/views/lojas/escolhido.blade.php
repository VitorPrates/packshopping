{{-- <x-layout> --}}
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
    <div class="container-loja-escolhida">
        <div class="header_loja">
            <img src="{{$list -> logo ? asset('storage/' . $list-> logo) : asset('/img/no-image.png')}}" alt="">
            <h1>{{$list["Titulo"]}}</h1>
        </div>
        <div class="main_loja">
            <div class="categorias_loja">
                <x-listando-tags-card :tagsCsv="$list->tags"/>
            </div>
            <div class="produtos_loja">
                <ul>
                    @foreach ($product as $produto)
                        @if ($list -> id == $produto->loja_id)
                            <li><a href="/produto/{{$produto->id}}/"><x-loja-produto :product=$produto/></a></li>    
                        @endif
                    @endforeach
                </ul>
                
                {{-- <h1>{{dd($product[0])}}</h1> --}}
            </div>
        </div>
        <button class="sair_loja" onclick="history.back()">Voltar</button>
    </div> 
    {{-- <a href="/select/{{$list -> id}}/edit"><i class="fa-solid fa-pencil"></i>editar</a>
    <form method="POST" action="/select/{{$list->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar Loja</button>
    </form> --}}
{{-- <p>{{$listas["descri"]}}</p> --}}
{{-- </x-layout> --}}

