<x-layout>
    <a href="/lojas/criarloja">Crie sua loja!</a>
    @include('partials._hero')  
    @include('partials._search')
    @unless(count($listas) == 0)
    
    <div class="cards-index">
        @foreach($listas as $item)
        <x-listando-card :item="$item"/>
        @endforeach
    </div>
    
    @else
    <p>Sem Lojas :(</p>
    @endunless
    <div class="btn-page">
        {{$listas->links()}}
    </div>
</x-layout>
    
