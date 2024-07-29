<x-layout>
    @php
        /*jkjl
        asdas
        asadad*/
    @endphp
    <table class="vizualizando_lojas">
        <tr>
            <th colspan="2">Usuários com loja</th>
        </tr>
        <tr>
            <th>Usuário dono</th>
            <th>Nome da loja</th>
        </tr>
        @foreach ($users as $item)
            @foreach ($lojas::all() as $loja)
                <tr>
                    @if($item['id'] == $loja['user_id'])
                        <td>{{$item['name']}}</td>
                        <td>{{$loja["Titulo"]}}</td>
                    @endif
                </tr>
            @endforeach
        @endforeach
    </table>
    <table class="vizalizando_usuarios">
        <tr>
            <th>Usuários</th>
        </tr>
        
            @foreach ($users as $user)
                <tr>
                    <td>{{$user['name']}}</td>
                </tr>
            @endforeach
    </table>
    
    
</x-layout>
    