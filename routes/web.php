<?php

use App\Http\Controllers\controledelistas;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listando;
// use App\Models\listas;

//todas
Route::get('/', [controledelistas::class,'index']);

//apenas uma
// Route::get("/select/{id}", function($id){
//     $encontrado = Listando::find($id);
//     if($encontrado)
//     {
//         return view("escolhido",[
//             'list' => $encontrado
//         ]);
//     }
//     else
//     {
//         abort(404);
//     }
// });
Route::post('/loja/lojacriada',[controledelistas::class,'lojacriada']);


// outro jeito de fazer encontrar a página selecionada
Route::get("/select/{listando}", [controledelistas::class, 'show']);

//controle de lojas
Route::get('/lojas/controle',[controledelistas::class,'controleLojas'])->middleware('auth');


//formulário de criação
Route::get('/lojas/criarloja', [controledelistas::class,'create'])->middleware('auth');

//form de edição
Route::get('/select/{listando}/edit', [controledelistas::class,'edit'])->middleware('auth');

//enviar alterações
Route::put('/select/{listando}',[controledelistas::class,'update'])->middleware('auth');

//deletar loja
Route::DELETE('/select/{listando}',[controledelistas::class,'deletarLoja'])->middleware('auth');

//formulario de registro de usuario
Route::get('/register',[UserController::class, 'criaruser']);

//criar novo usuario
Route::post('/users',[UserController::class,'store'])->middleware('guest');

//deslogar
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//logar
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');

//login user
Route::post('/users/authenticate',[UserController::class, 'authenticate']);


Route::get('/heio', function () {
    return response("<h1>heio</hi>")
        ->header("Content-Type","text/plain");
});
Route::get('/posts/{id}', function ($id) {
    return "<h1>heio $id</h1>";
}) -> where('id',"[0-9]+");

Route::get("/proc", function(Request $request){
    return ($request -> nome. " e " .$request -> cidade);
});