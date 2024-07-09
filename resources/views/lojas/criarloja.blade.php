<x-layout>
    <h1>criar joja</h1>
    <form class="form_criar_loja" action="/loja/lojacriada" method="POST">
        @csrf
        <label for="">Nome da loja</label>
        <input type="text" name="Titulo">
        @error('Titulo')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">tags (virdula para separar)</label>
        <input type="text" name="tags">
        @error('tags')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">nome da empresa</label>
        <input type="text" name="empresa">
        @error('empresa')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror

        <label for="">email</label>
        <input type="text" name="email">
        @error('email')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">website</label>
        <input type="text" name="website">
        @error('website')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">local</label>
        <input type="text" name="local">
        @error('local')
            <span class="erro_form">erro, campo acima não preenchido </span>
        @enderror
        
        <label for="">descrição</label>
        <textarea name="descri" id="" cols="30" rows="10"></textarea>
        @error('descri')
            <span class="erro_form">Erro, campo acima não preenchido </span>
        @enderror
        
        <div class="btns-form">
            <button type="reset">Limpar</button>
            <button type="submit">Enviar</button>

        </div>
        
    </form>
</x-layout>