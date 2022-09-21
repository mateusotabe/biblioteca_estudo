<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function dashboard()
    {
        return view(('dashboard'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    // Verificar se isso é relamente necessário
    // Redireciona para login caso o name user for null, corrigir o erro de logar no / sem estar logado
    public function redirect_login()
    {
        return redirect('auth.login');
    }

    // Home
    public function home()
    {
        return view('welcome');
    }
}