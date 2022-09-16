<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');

Route::get('/user', function () {
    return view('user');
});

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');


// Exibir form para cadastrar um novo livro
Route::get('/livro/novo', [BookController::class, 'create'])->name('new_book');
// Registrar no banco o novo livro
Route::post('/livro/novo', [BookController::class, 'store']);

// Exibir um livro
Route::get('/livro/{id}', [BookController::class, 'read'])->name('book');

// Atualizar livro
Route::post('/livro/{id}', [BookController::class, 'update']);

// Verificar excluir livro
Route::get('/livro/excluir/{id}', [BookController::class, 'checkDelete'])->name('check_delete_book');
// Excluir livro
Route::delete('/livro/{id}', [BookController::class, 'delete'])->name('delete_book');

// Exibir varios livros
Route::get('/livros', [BookController::class, 'index'])->name('index_book');

// Criar novos usuários
Route::get('/user', [UserController::class, 'create'])->name('new_user');



// livewire
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [UserController::class,'dashboard'])->name('dashboard');
});

