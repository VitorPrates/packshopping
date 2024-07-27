<x-layout>
    <h1>Adicionar produtos</h1>
    <form class="form_addproduct" action="/testeadd" method="POST">
        @csrf
        <label for="">Adicionando produtos à: {{$info[0]}}</label>
        <label for="">Nome</label>
        <input type="text" name="Titulo">
        <label for="">Preço R$</label>
        <input type="text" name="Preco">
        <label for="">Descrição</label>
        <input type="text" name="Descri">
        <input type="hidden" name="loja_id" value="{{$info[1]}}">
        <div class="btns">
            <button type="submit">Adicionar</button>
            <button type="reset">Limpar</button>
        </div>
        
    </form>
</x-layout>