@extends('layouts.main')

@section('title', 'Cadastro de Usuário')


@section('content')

    <h1>Cadastrar novo usuário</h1>

    <form action="" method="POST" class="form-create">
        @csrf
        <div>
            
            <label for="name-user" class="m-1">Nome</label>
            <input type="text" name="name-user" id="name-user" value="{{ old('name-user') }}">
            @error('name-user')
                <span style="color: red">{{ $message  }}</span>
            @enderror
            <br>

            <label for="password-user" class="m-1">Senha</label>
            <input type="password" name="password-user" id="password-user" value="{{ old('email-user') }}">
            @error('password-user')
                <span style="color: red">{{ $message  }}</span>
            @enderror
            <br>

            <label for="email-user" class="m-1">E-mail</E-mail></label>
            <input type="text" name="email-user" id="email-user" value="{{ old('email-user') }}">
            @error('email-user')
                <span style="color: red">{{ $message  }}</span>
            @enderror
            <br>

        </div>
        <div>
            <button class="btn btn-dark mt-3">Criar Usuário</button>
            @error('*')
                <span style="color: red">Erro, confira todos os campos!</span>
            @enderror
        </div>


    </form>

@endsection