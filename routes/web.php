<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/cadastro', function () {
    return view('usuario.cadastro');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//usuarios
Route::get('/usuario', [UserController::class, 'listar'])->name('user-list');
Route::get('/usuario/create', [UserController::class, 'create'])->name('user-create');
Route::post('/usuario/store', [UserController::class, 'store'])->name('user-store');
