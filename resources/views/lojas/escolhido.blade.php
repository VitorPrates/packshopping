<x-layout>
    <h1>heio</h1>
    <h1>{{$list["Titulo"]}}</h1>
    <x-listando-tags-card :tagsCsv="$list->tags"/>
    <p>{{$list["descri"]}}</p>
{{-- <p>{{$listas["descri"]}}</p> --}}
</x-layout>

