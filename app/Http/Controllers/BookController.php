<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required', 'max:255'],
            'author' => ['required', 'max:255'],
            'cat' => ['max:255'],
            'year' => ['nullable', 'date'],
        ],[
            'title.required' => 'Preencha o título',
            'title.max' => 'Limite de 255  caracteres excedido',
            'author.required' => 'Preencha o autor',
            'author.max' => 'Limite de 255  caracteres excedido',
            'cat.max' => 'Limite de 255  caracteres excedido',
            'year.date' => 'Lançamento tem de estar no formato de data',
        ]);

        // Cadastrar
        $new_book = new Book;
        $new_book->title = $attributes['title'];
        $new_book->author = $attributes['author'];
        $new_book->cat = $attributes['cat'];
        $new_book->year = $attributes['year'];
        $new_book->save();

        return redirect()->route('book', $new_book->id);
    }

    public function read($id)
    {
        $book = Book::findOrFail($id);

        return view('book.read', ['book' => $book]);
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required', 'max:255'],
            'author' => ['required', 'max:255'],
            'cat' => ['max:255'],
            'year' => ['nullable', 'date'],
        ],[
            'title.required' => 'Preencha o título',
            'title.max' => 'Limite de 255  caracteres excedido',
            'author.required' => 'Preencha o autor',
            'author.max' => 'Limite de 255  caracteres excedido',
            'cat.max' => 'Limite de 255  caracteres excedido',
            'year.date' => 'Lançamento tem de estar no formato de data',
        ]);

        $book = Book::find($request->id);
        $book->title = $attributes['title'];
        $book->author = $attributes['author'];
        $book->cat = $attributes['cat'];
        $book->year = $attributes['year'];
        $book->save();

        return redirect()->route('book', $book->id)->with('success', 'Atualizado com sucesso!');
    }

    public function checkDelete($id)
    {
        session()->flash('check_delete', Book::find($id));
        return redirect()->route('index_book');
    }

    public function delete($id, Request $request)
    {
        if($request->id) {
            $id = $request->id;
        }

        $book = Book::find($id);
        $book->delete();
        return redirect()->route('index_book')->with('success', 'Deletado com êxito');
    }

    public function index(Request $request)
    {

        $books = Book::where('title', 'like', '%'.$request->filters_title.'%')->get();

        return view('books', ['books' => $books]);
    }
}
