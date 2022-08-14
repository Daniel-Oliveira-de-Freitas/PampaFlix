@extends('fragmentos.main')
@section('title', 'Login')
@section('content')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <div class="bg-principal text-white flex  justify-content h-screen">
        <h1 class="mt-1%">Home > Login</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            @if ($errors->any())
            <h2 class="text-center text-red-600 text-xl" id="obrigatorio"><small>Usuário ou senha incorretos!</small></h2>
            @endif
            <div class="container">
                <label class="emailUser" for="email">Email</label>
                <input class="userInput" type="email" name="email" required>
            </div>

            <div class="container">
                <label class="senhaUser" for="psw">Senha</label>
                <input class="passInput" type="password" name="password" required>
            </div>

            <button class="container btn_Login rcorners4" type="submit">
                <label>Entrar</label>
            </button>

            {{-- <div class="container">
                <button class="esqueceuSenha" type="submit"><a href="{{ route('register') }}">Esqueceu sua
                        senha?</a></button>
            </div> --}}

            <div class="container mt-5%">
                <a class="cadastre" type="submit" href="{{ route('register') }}">Registre-se</a>
            </div>
    </div>
    </form>
    </div>
@endsection
