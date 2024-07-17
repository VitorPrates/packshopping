<x-layout>
    <h1>Login</h1>
    <form class="Register-form" action="/users/authenticate" method="POST">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            {{-- <span style="color: red">O campo acima deve ser preenchido</span> --}}
            <span style="color: red">{{$message}}</span>
        @enderror
        {{-- <label for="">Email</label>
        <input type="text" name="email" value="{{old('email')}}">
        @error('email')
            <span style="color: red">O campo acima deve ser preenchido</span>
        @enderror --}}
        <label for="password">Senha</label>
        <input type="text" name="password">
        @error('password')
            <span style="color: red">{{$message}}</span>
        @enderror
        <div class="btns">
            <button type="submit">Login</button>
            <button type="reset">Limpar</button>
        </div>
        <a href="/register">Não possui uma conta?</a>
    </form>
</x-layout>