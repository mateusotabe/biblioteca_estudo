@extends('layouts.main')

@section('title', 'Livros')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <h2 class="h2">Lista dos Livros</h2>

            @if(session()->exists('success'))
                <h4 class="h4 text-success my-4">{{ session()->get('success') }}</h4>
            @endif

            @if(session()->exists('check_delete'))
                <form method="POST" action="{{ route('delete_book', session()->get('check_delete')->id) }}">
                    @csrf
                    @method('delete')
                    <p>Deseja excluir o livro <b>{{ session()->get('check_delete')->title }}</b></p>
                    <button class="btn btn-sm btn-danger">Excluir</button>
                    <a href="{{ route('index_book') }}" class="btn btn-sm btn-outline-primary">Cancelar</a>
                </form>
            @endif
            <form method="GET">
                <div class="row">
                    <div class="col-10">
                        <small for="filters.title">Título</small>
                        <input type="text" name="filters.title">
                    </div>

                    <div class="col-2">
                        <button>Filtrar</button>
                    </div>
                </div>
            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Gênero</th>
                        <th>Lançamento</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td><a href="{{ route('book', $book->id) }}">{{ $book->title }}</a></td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->cat }}</td>
                            {{-- Formatar a data d/m/a --}}
                            <td>{{ $book->year }}</td>
                            <td>
                                <a href="{{ route('check_delete_book', $book->id) }}" class="text-danger">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
