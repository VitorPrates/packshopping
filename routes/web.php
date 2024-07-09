<?php

use App\Http\Controllers\controledelistas;
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


//formulário de criação
Route::get('/lojas/criarloja', [controledelistas::class,'create']);












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