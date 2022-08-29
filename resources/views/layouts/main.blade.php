<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Fonte Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&family=Roboto:" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!-- CSS -->
    <!-- <link href="public/css/style.css" rel="stylesheet"> -->
    <link  rel="stylesheet" href="/css/styles.css"> 
    

</head>
<body class="m-3">
    
    @yield('content')
    @csrf
    <div class="main_menu mt-3">
        <button class="home btn btn-dark"><a href="/">Home</a></button>
        <button class="book_add btn btn-dark"><a href="/livro/novo">Adicionar Livro</a></button>
        <button class="book_find btn btn-dark">Exibir Livro</button>
    </div>
    <footer class="footer">
        2022 - Biblioteca Aeromot - Todos os direitos reservados
    </footer>
</body>
</html>