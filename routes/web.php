<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegiaoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/cadastro', function () {
    return view('usuario.cadastro');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//usuarios
Route::get('/usuario',                  [UserController::class, 'listar'])->name('user-list');
Route::get('/usuario/inativos',         [UserController::class, 'listarInativos'])->name('user-listInativos');
Route::get('/usuario/create',           [UserController::class, 'create'])->name('user-create');
Route::post('/usuario/store',           [UserController::class, 'store'])->name('user-store');
Route::get('/usuario/perfil',           [UserController::class, 'perfil'])->name('user-perfil');
Route::get('/usuario/show/{user}',      [UserController::class, 'show'])->name('user-show');
Route::post('/usuario/delete/{user}',   [UserController::class, 'delete'])->name('user-delete');
Route::post('/usuario/ativar/{user}',   [UserController::class, 'ativar'])->name('user-ativar');
Route::put('/update/dados/{id}',        [UserController::class, 'updateDados'])->name('user-update-dados');
Route::put('/update/endereco/{id}',     [UserController::class, 'updateEndereco'])->name('user-update-endereco');
Route::put('/update/acesso/{id}',       [UserController::class, 'updateAcesso'])->name('user-update-acesso');
Route::put('/update/perfil/{id}',       [UserController::class, 'updatePerfil'])->name('user-update-perfil');


//regiao
Route::get('/regiao',                   [RegiaoController::class, 'listar'])->name('regiao-list');
Route::get('/regiao/create',            [RegiaoController::class, 'create'])->name('regiao-create');
Route::post('/regiao/store',            [RegiaoController::class, 'store'])->name('regiao-store');
Route::post('/regiao/delete/{id}',      [RegiaoController::class, 'delete'])->name('regiao-delete');
Route::get('/regiao/editar/{regiao}',   [RegiaoController::class, 'editar'])->name('regiao-editar');
Route::put('/regiao/update/{id}',       [RegiaoController::class, 'update'])->name('regiao-update');


//Posts
Route::get('/',                 [PostController::class, 'welcome'])->name('post-list');
Route::get('/post/create',      [PostController::class, 'create'])->name('post-create');
Route::post('/post/store',      [PostController::class, 'store'])->name('post-store');

Route::get('post/show/{id}',    [PostController::class, 'show'])->name('post-show');
Route::post('/post/coment',     [PostController::class, 'postComent'])->name('post-coment');
