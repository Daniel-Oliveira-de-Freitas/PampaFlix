@extends('fragmentos.main')
@section('title', 'Login')
@section('content')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <div class="bg-principal text-white flex  justify-content h-screen">
        <h1 class="mt-1%">Home > Login</h1>
        @if ($errors->any())
        @endif
        <form action="{{ route('login') }}" method="POST">
            <h2 class="text-center color-red" id="obrigatorio"><small>Usuário ou senha incorretos!</small></h2>
            @csrf
            <div class="container">
                <label class="emailUser" for="email">Email</label>
                <input class="userInput" type="email" name="email" required>
            </div>

            <div class="container">
                <label class="senhaUser" for="psw">Senha</label>
                <input class="passInput" type="password" name="password" required>
            </div>

            <div class="container btn_Login rcorners4">
                <button type="submit">Entrar</button>
            </div>
            {{-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div> --}}

            <div class="container">
                <button class="esqueceuSenha" type="submit"><a href="{{ route('register') }}">Esqueceu sua
                        senha?</a></button>
            </div>

            <div class="container mt-5%">
                <button class="cadastre" type="submit"><a href="{{ route('register') }}">Registre-se</a></button>
            </div>
    </div>
    </form>
    </div>
@endsection
