@props(['item'])

<x-card>
    <img src="{{$item -> logo ? asset('storage/' . $item-> logo) : asset('/img/no-image.png')}}" alt="logo_empresa" class="logo_index">
    <h1><a href="/select/{{$item['id']}}"> {{$item["Titulo"]}} </a></h1>
    {{-- <h2>{{$item -> empresa}}</h2> --}}
    <p>Local: {{$item -> local}}</p>
    <p>{{$item["descri"]}}</p>
    <x-listando-tags-card :tagsCsv="$item->tags"/>
</x-card>