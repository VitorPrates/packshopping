<x-layout>
    <h1>editar loja (Loja a ser editada: {{$info -> Titulo}})</h1>
    <form class="form_criar_loja" action="/select/{{$info -> id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nome da loja</label>
        <input type="text" name="Titulo" value="{{$info -> Titulo}}">
        @error('Titulo')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">tags (virgula para separar)</label>
        <input type="text" name="tags" value="{{$info -> tags}}">
        @error('tags')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">nome da empresa</label>
        <input type="text" name="empresa" value="{{$info -> empresa}}">
        @error('empresa')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror

        <label for="">email</label>
        <input type="text" name="email" value="{{$info -> email}}">
        @error('email')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">website</label>
        <input type="text" name="website" value="{{$info -> website}}">
        @error('website')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">local</label>
        <input type="text" name="local" value="{{$info -> local}}">
        @error('local')
            <span class="erro_form">erro, campo acima não preenchido </span>
        @enderror

        <label for="">Logo</label>
        <input type="file" name="logo" id="">
        <img src="{{$info -> logo ? asset('storage/' . $info-> logo) : asset('/img/no-image.png')}}" alt="">

        <label for="">descrição</label>
        <textarea name="descri" id="" cols="30" rows="10" >{{$info -> descri}}"</textarea>
        @error('descri')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <div class="btns-form">
            <button type="reset">Limpar</button>
            <button type="submit">Atualizar</button>
        </div>
        
    </form>
</x-layout>