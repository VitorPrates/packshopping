<x-layout>
    <table class="lista_lojas">
        <tbody>
            <tr>
                <th>Controle de lojas</th>
            </tr>
            
                @unless ($info -> isEmpty())
                @foreach ($info as $item)
                <tr>
                    <td>{{$item -> Titulo}}</td>
                    {{-- <td>{{$item -> user_id}}</td> --}}
                    <td><a href="/select/{{$item -> id}}/edit">Editar</a></td>
                    <td>
                        <form action="/select/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Apagar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
            <tr><td>Sem lojas aqui :(</td></tr>
            @endunless
        </tbody>
    </table>
</x-layout>