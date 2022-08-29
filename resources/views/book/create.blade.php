@extends('layouts.main')

@section('title', 'Novo Livro')


@section('content')
    <h1>Cadastrar Novo Livro</h1>

    <form action="" method="POST" class="form-create">
        @csrf
        <div>
            <label for="title" class="m-1">Título</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <span style="color: red">{{ $message  }}</span>
            @enderror
        </div>
        <div class="px-1">
            <label for="author" class="m-1">Autor</label>
            <input type="text" name="author" id="author" value="{{ old('author') }}">
            @error('author')
                <span style="color: red">{{ $message  }}</span>
            @enderror
        </div>
        <div>
            <label for="cat" class="m-1">Categoria</label>
            <input type="text" name="cat" id="cat"  value="{{ old('cat') }}">
            @error('cat')
                <span style="color: red">{{ $message  }}</span>
            @enderror
        </div>
        <div>
            <label for="year" class="m-1">Lançamento</label>
            <input type="date" name="year" id="year"  value="{{ old('year') }}">
            @error('year')
                <span style="color: red">{{ $message  }}</span>
            @enderror
        </div>
        <div>
            <button class="btn btn-dark">Salvar</button>
            @error('*')
                <span style="color: red">Erro, confira todos os campos!</span>
            @enderror
        </div>
    </form>
@endsection
