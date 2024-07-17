<x-layout>
    <img src="{{$list -> logo ? asset('storage/' . $list-> logo) : asset('/img/no-image.png')}}" alt="">
    <h1>heio</h1>
    <h1>{{$list["Titulo"]}}</h1>
    <x-listando-tags-card :tagsCsv="$list->tags"/>
    <p>{{$list["descri"]}}</p>
    {{-- <a href="/select/{{$list -> id}}/edit"><i class="fa-solid fa-pencil"></i>editar</a>
    <form method="POST" action="/select/{{$list->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar Loja</button>
    </form> --}}
{{-- <p>{{$listas["descri"]}}</p> --}}
</x-layout>

