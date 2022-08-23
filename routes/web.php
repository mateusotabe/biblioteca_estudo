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
Route::get('/livro/novo', function () {
    return view('livro');
});
// Registrar no banco o novo livro
Route::post('/livro/novo', [BookController::class, 'create']);

Route::get('/livro/{id}', function ($id) {
    return 'Livro '.$id;
});
Route::post('/livro/{id}', function ($id) {
    return 'Livro '.$id.' atualizado';
});
Route::delete('/livro/{id}', function ($id) {
    return 'Livro '.$id.' excluido';
});
