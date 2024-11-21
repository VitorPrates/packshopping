<x-layout>
    {{-- <h1>Adicionar produtos na loja {{$info[1]}}</h1> --}}
    <form class="form_addproduct" action="/testeadd/{{$info[1]}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="infos-produto">
            <input type="hidden" name="loja_id" value="{{$info[1]}}">
            <label for="">Adicionando produtos à: {{$info[0]}}</label>
            <label for="">Nome</label>
            <input type="text" name="Titulo">
            <label for="">Preço R$</label>
            <input type="text" name="Preco">
            <label for="">Descrição</label>
            <textarea name="Descri" cols="30" rows="10">
            </textarea>
            {{-- <input type="text" name="Descri"> --}}
            <div class="btns">
                <button type="submit">Adicionar</button>
                <button type="reset">Limpar</button>
            </div>
        </div>
        <div class="img-produto">
            <label for="">Imagem do produto: </label>
            <input type="file" name="logo" id="imageInput">
            <div class="imageDisplay"></div>
            <script>
                var block_1 = document.querySelector(".imageDisplay");
                document.getElementById('imageInput').addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                    // const img = document.getElementById('imageDisplay');
                    // img.src = e.target.result;
                    // img.style.display = 'block'; // Mostra a imagem
                    block_1.style.backgroundImage = `url(${e.target.result})`;
                    // console.log(e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
                });
            </script>
        </div>
    </form>
</x-layout>