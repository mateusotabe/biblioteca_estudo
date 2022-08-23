<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'author' => ['required']
        ],[
            'title.required' => 'Preencha o título',
            'author.required' => 'Preencha o autor',
        ]);

        dd('Passou!');
    }
}
