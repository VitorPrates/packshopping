@props(['product'])
<div class="container_product_loja">
    <img src="{{asset('/img/no-image.png')}}" alt="Imagem do produto">
    <p>{{$product->Titulo}}</p>
    <span>R${{$product->Preco}}</span>
    <button>Ver Produto</button>
</div>