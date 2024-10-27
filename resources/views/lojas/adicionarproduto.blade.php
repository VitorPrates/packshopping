<x-layout>
    <h1>Adicionar produtos na loja {{$info[1]}}</h1>
    <form class="form_addproduct" action="/testeadd/{{$info[1]}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="loja_id" value="{{$info[1]}}">
        <label for="">Adicionando produtos à: {{$info[0]}}</label>
        <label for="">Nome</label>
        <input type="text" name="Titulo">
        <label for="">Preço R$</label>
        <input type="text" name="Preco">
        <label for="">Descrição</label>
        <input type="text" name="Descri">
        
        <div class="btns">
            <button type="submit">Adicionar</button>
            <button type="reset">Limpar</button>
        </div>
        
    </form>
</x-layout>