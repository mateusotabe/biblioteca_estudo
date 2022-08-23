@extends('layouts.main')

@section('title', 'Novo Livro')


@section('content')
    <h1>Cadastrar Novo Livro</h1>

    <form action="" method="POST">
        @csrf
        <div>
            <label for="title">Título</label>
            <input type="text" name="title" id="title">
            @error('title')
                <span style="color: red">{{ $message  }}</span>
            @enderror
        </div>
        <div>
            <label for="author">Autor</label>
            <input type="text" name="author" id="author">
            @error('author')
                <span style="color: red">{{ $message  }}</span>
            @enderror
        </div>
        <div>
            <label for="cat">Categoria</label>
            <input type="text" name="cat" id="cat">
        </div>
        <div>
            <label for="year">Lançamento</label>
            <input type="date" name="year" id="year">
        </div>
        <div>
            <button>Salvar</button>
            @error('*')
                <span style="color: red">Erro, confira todos os campos!</span>
            @enderror
        </div>
    </form>
@endsection
