@extends('layouts.main')

@section('title', 'Novo Usuário')


@section('content')

    <h1>Cadastrar novo usuário</h1>

    <form action="" method="POST" class="form-create">
        @csrf
        <div>
            <label for="title" class="m-1">Nome</label>
            <input type="text" name="name-user" id="name-user" value="{{ old('name-user') }}">
            @error('title')
                <span style="color: red">{{ $message  }}</span>
            @enderror
        </div>


    </form>

@endsection