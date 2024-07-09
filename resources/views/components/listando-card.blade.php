@props(['item'])

<x-card>
<h1><a href="/select/{{$item['id']}}"> {{$item["Titulo"]}} </a></h1>
<h2>{{$item -> empresa}}</h2>
<p>Local: {{$item -> local}}</p>
<p>{{$item["descri"]}}</p>
<x-listando-tags-card :tagsCsv="$item->tags"/>
</x-card>