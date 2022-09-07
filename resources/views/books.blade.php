@extends('layouts.main')

@section('title', 'Livros')

@section('content')
<link  rel="stylesheet" href="/css/styles.css">
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
            <!-- botões de filtros de pesquisa -->
            <form method="GET">
                <div class="row p-2">
                    <div class="col-sm-3 p-1">
                        <small for="filters.title">Título</small>
                        <input type="text" name="filters.title">
                    </div>
                    <div class="col-sm-3 p-1">
                        <small for="filters.title">Autor</small>
                        <input type="text" name="filters.author">
                    </div>
                    <div class="col-sm-3 p-1">
                        <small for="filters.title">Genero</small>
                        <input type="text" name="filters.cat">
                    </div>

                    <div class="col-sm-3 p-1">
                        <small for="filters.title">Data</small>
                        <input type="text" name="filters.yeart">
                    </div>

                    <div class="col-sm-1 p-1">
                        <button class="btn btn-dark">Filtrar</button>
                    </div>
                </div>
            </form>
            <!-- tabela de exibir livros -->
            <table class="table table-striped table-bordered">
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
                            <!-- <td>{{ $book->year }}</td> -->
                            <td>{{\Carbon\Carbon::parse($book->year)->format('d/m/Y')}}</td>
                            <td>
                                <a href="{{ route('check_delete_book', $book->id) }}" class="text-danger">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Div dos botões de paginação -->
            <!-- <div class="py-4 w-25 p-5" id="next-page"> -->
            <div class="py-1 p-5" id="paginate">
                {{$books->links()}}
            </div>
        
        </div>
    </div>

@endsection
