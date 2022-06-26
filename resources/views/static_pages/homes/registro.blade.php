@extends('fragmentos.main')
@section('title', 'Bem-vindo ao PampaFlix!')
@section('content')
    <div class="bg-principal text-white flex  justify-content h-screen">
        <div class="">
            <img src="" alt="">
            <h1 class="">Home > Registro</h1>
            <div class="container">
                <label for="uname"><b>Nome</b></label>
                <input type="text"name="uname" required>

                <label for="sobrenome"><b>Sobrenome</b></label>
                <input type="text"name="sobrenome" required>

                <label for="email"><b>Email</b></label>
                <input type="text"name="email" required>

                <label for="psw"><b>Senha</b></label>
                <input type="password" name="psw" required>

                <label for="psw"><b>Confirmar senha</b></label>
                <input type="password" name="psw" required>

                <button type="submit">Registrar conta</button>
                <button type="submit"><a href="{{ route('login') }}">Ja possui uma conta? Realizar login</a></button>
              </div>
        </div>
    </div>
@endsection
