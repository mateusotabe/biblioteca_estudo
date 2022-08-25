<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

// Home do sistema de biblioteca
Route::get('/', function () {
    return view('welcome');
});

// Exibir form para cadastrar um novo livro
Route::get('/livro/novo', [BookController::class, 'create'])->name('new_book');
// Registrar no banco o novo livro
Route::post('/livro/novo', [BookController::class, 'store']);

// Exibir um livro
Route::get('/livro/{id}', [BookController::class, 'read'])->name('book');
Route::post('/livro/{id}', [BookController::class, 'update']);
Route::delete('/livro/{id}', function ($id) {
    return 'Livro '.$id.' excluido';
});

// Exibir varios livros


