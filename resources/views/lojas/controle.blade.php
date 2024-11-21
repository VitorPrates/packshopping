<x-layout>
    <table class="lista_lojas">
        <tbody>
                <tr>
                    <th colspan="4">Controle de lojas</th>
                </tr>
                @unless ($info -> isEmpty())
                @foreach ($info as $item)
                <tr>
                    <td><a href="/select/{{$item -> id}}">{{$item -> Titulo}}</a></td>
                    
                    <td><a href="/select/{{$item -> id}}/edit">Editar</a></td>
                    <td>
                        <form action="/select/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Apagar</button>
                        </form>
                    </td>
                    <td>
                        <a href="/select/{{$item->id}}/addproduct">Adiconar produtos</a>
                    </td>
                </tr>
                @endforeach
            @else
            <tr><td>Sem lojas aqui :(</td></tr>
            @endunless
        </tbody>
    </table>
</x-layout>