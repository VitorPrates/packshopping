<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    //form de criação de usuario
    public function criaruser()
    {
        return view('users.register');
    }
    //criar novo usuário
    public function store(Request $request)
    {
        $formFields = $request -> validate([
            'name' => ['required','min:3'],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //criar user
        $user = User::create($formFields);

        //login
        auth()->login($user);

        return redirect('/')->with('message','Novo usuário Registrado!');
    }

    //deslogar
    public function logout(Request $req)
    {
        auth() -> logout();

        $req -> session()->invalidate();
        $req -> session()->regenerate();

        return redirect('/') -> with('message', 'Usuário deslogado');
    }

    //login
    public function login()
    {
        return view('users.login');
    }
    public function authenticate(Request $req)
    {
        $formFields = $req -> validate([
            'name' => ['required'],
            'password' => 'required'
        ]);
        if(auth()->attempt($formFields))
        {
            $req -> session()->regenerate();
            return redirect('/') -> with('message','Bem vindo!');
        }
        return back()->withErrors(['name' => 'Credenciais inválidas']) -> onlyInput('name');
        
    }
}
