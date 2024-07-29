@props(['item'])

<a class="index_card_loja" href="/select/{{$item['id']}}">
    <x-card>
        <img src="{{$item -> logo ? asset('storage/' . $item-> logo) : asset('/img/no-image.png')}}" alt="logo_empresa" class="logo_index">
        <div class="loja_infos_index">
            <x-listando-tags-card :tagsCsv="$item->tags"/>
            <h1>{{$item["Titulo"]}}</h1>
            {{-- <h2>{{$item -> empresa}}</h2> --}}
            {{-- <p>Local: {{$item -> local}}</p> --}}
            {{-- <p>{{$item["descri"]}}</p> --}}
            <h2><span>{{$item['local']}}</span><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
              </svg></span></h2>
        </div>
    </x-card>
</a> 
   
