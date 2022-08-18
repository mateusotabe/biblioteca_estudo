<?php

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

Route::get('/livro/novo', function () {
    return 'Formulário para cadastrar novo livro';
});
Route::post('/livro/novo', function () {
    return 'Cadastrar novo livro no bd';
});

Route::get('/livro/{id}', function ($id) {
    return 'Livro '.$id;
});
Route::post('/livro/{id}', function ($id) {
    return 'Livro '.$id.' atualizado';
});
Route::delete('/livro/{id}', function ($id) {
    return 'Livro '.$id.' excluido';
});
