@extends('fragmentos.main')
@section('title', 'Login')
@section('content')
    <div class="bg-principal text-white flex  justify-content h-screen">
        <h1 class="mt-1%">Home > Login</h1>
        <div class="">
            <div class="container">
                <label class="emailUser" for="email">Email</label>
                <input class="userInput" type="text"name="email" required>
            </div>

            <div class="container">
                <label class="senhaUser" for="psw">Senha</label>
                <input class="passInput" type="password" name="psw" required>
            </div>

            <div class="container btn_Login rcorners4">
                <button type="submit">Entrar</button>
            </div>

            <div class="container">
                <button class="esqueceuSenha" type="submit"><a href="{{ route('registro') }}">Esqueceu sua senha?</a></button>
            </div>

            <div class="container mt-5%">
                <button class="cadastre" type="submit"><a href="{{ route('registro') }}">Registre-se</a></button>
            </div>
            </div>
        </div>
    </div>
@endsection
