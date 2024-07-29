<x-layout>
    <form class="Register-form" action="/users" method="POST">
        <h1>Novo usuário</h1>
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            <span style="color: red">O campo acima deve ser preenchido</span>
        @enderror
        <label for="">Email</label>
        <input type="text" name="email" value="{{old('email')}}">
        @error('email')
            <span style="color: red">O campo acima deve ser preenchido</span>
        @enderror
        <label for="password">Senha</label>
        <input type="text" name="password">
        @error('password')
            <span style="color: red">{{$message}}</span>
        @enderror
        <label for="">Confirmar Senha</label>
        <input type="text" name="password_confirmation">
        
        <div class="btns">
            <button type="submit">Entrar</button>
            <button type="reset">Limpar</button>
        </div>
        <a href="/login">Já possui uma conta?</a>
    </form>
</x-layout>