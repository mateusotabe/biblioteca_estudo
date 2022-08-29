@extends('layouts.main')

@section('title', $book->title)

@section('content')
    <h1>Livro #{{ $book->id }}</h1>

    <form action="" method="POST" class="form-read">
        @csrf
        <input type="hidden" name="id" value="{{ $book->id }}">
        <div>
            <label for="title" class="m-1">Título</label>
            <input type="text" name="title" id="title" value="{{ old('title') ? old('title') : $book->title }}">
            @error('title')
            <span style="color: red">{{ $message  }}</span>
            @enderror
        </div>
        <div>
            <label for="author" class="m-1">Autor</label>
            <input type="text" name="author" id="author" value="{{ old('author') ? old('author') : $book->author }}">
            @error('author')
            <span style="color: red">{{ $message  }}</span>
            @enderror
        </div>
        <div>
            <label for="cat" class="m-1">Categoria</label>
            <input type="text" name="cat" id="cat"  value="{{ old('cat') ? old('cat') : $book->cat }}">
            @error('cat')
            <span style="color: red">{{ $message  }}</span>
            @enderror
        </div>
        <div>
            <label for="year" class="m-1">Lançamento</label>
            <input type="date" name="year" id="year"  value="{{ old('year') ? old('year') : $book->year }}">
            @error('year')
            <span style="color: red">{{ $message  }}</span>
            @enderror
        </div>
        <div>
            <button class="btn btn-dark">Salvar</button>
            @error('*')
                <span style="color: red">Erro, confira todos os campos!</span>
            @enderror
            @if(session()->exists('success'))
                <span style="color: green">{{ session()->get('success') }}</span>
            @endif
        </div>
    </form>
@endsection
