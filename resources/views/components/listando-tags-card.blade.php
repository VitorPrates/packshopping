@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv)
@endphp

<ul>
    @foreach ($tags as $tag)
        <a href="/?tag={{$tag}}"><li>{{$tag}}</li></a>    
    @endforeach
</ul>