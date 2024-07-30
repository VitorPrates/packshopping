<x-layout>
    <div class="container_vizualizacao">
        <div class="resultado_vizu">
            <table class="vizalizando_usuarios">
                <tr>
                    <th>Usuários</th>
                </tr>
                
                    @foreach ($users::latest()->filter(request(['search']))->simplePaginate(50) as $user)
                        <tr>
                            <td>{{$user['name']}}</td>
                        </tr>
                    @endforeach
            </table>
            
            <table class="vizualizando_lojas">
                <tr>
                    <th colspan="2">Usuários com loja</th>
                </tr>
                <tr>
                    <th>Usuário dono</th>
                    <th>Nome da loja</th>
                </tr>
                @foreach ($users::latest()->filter(request(['search']))->simplePaginate(50) as $item)
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
        </div>
        <div class="filtro_vizu">
            <table class="tabela_vizualizacao">
                <tr>
                    <th colspan="2">Filto</th>
                </tr>
                <tr>
                    <td colspan="2"><form class="filto_pesquisa" action="/seeall">
                        <input type="text" name="search">
                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                          </svg></button>
                    </form></td>
                </tr>
                <tr>
                    <td colspan="2">Valor Procurado:"{{$req['search']}}"</td>
                </tr>
                <tr>
                    <th>Titulo</th>
                    <th>Quant</th>
                </tr>
                <tr>
                    <td>Usuários</td>
                    <td>{{$users::latest()->filter(request(['search']))->count()}}</td>
                </tr>
                <tr>
                    <td>Lojas</td>
                    <td>{{$lojas::where('User_id',$users::latest()->filter(request(['search']))->get('id')[0]['id'])->count()}}</td>
                </tr>
            </table>
        </div>
    </div>
    
   
    
    
</x-layout>
    