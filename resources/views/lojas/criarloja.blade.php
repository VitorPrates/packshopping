<x-layout>
    {{-- <h1>criar loja</h1> --}}
    <form class="form_criar_loja" action="/loja/lojacriada" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nome da loja</label>
        <input type="text" name="Titulo" value="{{old('Titulo')}}">
        @error('Titulo')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">tags (virgula para separar)</label>
        <input type="text" name="tags" value="{{old('tags')}}">
        @error('tags')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">nome da empresa</label>
        <input type="text" name="empresa" value="{{old('empresa')}}">
        @error('empresa')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror

        <label for="">email</label>
        <input type="text" name="email" value="{{old('email')}}">
        @error('email')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">website</label>
        <input type="text" name="website" value="{{old('website')}}">
        @error('website')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">local</label>
        <input type="text" name="local" value="{{old('local')}}">
        @error('local')
            <span class="erro_form">erro, campo acima não preenchido </span>
        @enderror

        <label for="">Logo</label>
        <input type="file" name="logo" id="">
        @error('local')
            <span class="erro_form">erro, campo acima não preenchido </span>
        @enderror

        <label for="">descrição</label>
        <textarea name="descri" id="" cols="30" rows="10" >{{old('descri')}}"</textarea>
        @error('descri')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <div class="btns-form">
            <button type="reset">Limpar</button>
            <button type="submit">Enviar</button>

        </div>
        
    </form>
</x-layout>