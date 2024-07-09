<x-layout>
    <a href="/lojas/criarloja">Crie sua loja!</a>
    @include('partials._hero')  
    @include('partials._search')
    @unless(count($listas) == 0)
    
    @foreach($listas as $item)
    <x-listando-card :item="$item"/>
    @endforeach
    
    @else
    <p>Sem listas aqui :(</p>
    
    @endunless
</x-layout>
    
