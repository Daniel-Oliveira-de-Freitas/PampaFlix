@extends('fragmentos.main')
@section('title', 'Cadastro!')
@section('content')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <div class="bg-principal text-white flex  justify-content h-screen">
        <h1 class="mt-1%">Home > Registro</h1>

        <div class="">
            <div class="container">
                <label class="nome" for="uname"><b>Nome</b></label>
                <input class="rectangle1" type="text"name="uname" required>
            </div>

            <div class="container ">
                <label class="sobrenome" for="sobrenome"><b>Sobrenome</b></label>
                <input class="rectangle6" type="text"name="sobrenome" required>
            </div>

            <div class="container ">
                <label class="email" for="email"><b>Email</b></label>
                <input class="rectangle5" type="text"name="email" required>
            </div>

            <div class="container mt-5%">
            <div class="container ">
                <label class="senha" for="psw"><b>Senha</b></label>
                <input class="rectangle4" type="password" name="psw" required>
            </div>
            <div>
                <label class="confirmarSenha" for="psw"><b>Confirmar senha</b></label>
                <input class="rectangle3" type="password" name="psw" required>

            </div>
            </div>

            <div class="container mt-5%">
                <div class="btnCadastro rcorners4">
                    <button type="submit">Entrar</button>
                </div>
            </div>
        <div class="container">
            <button class="sessao" type="submit"><a href="{{ route('login') }}">Ja possui uma conta? Faca seu login</a></button>
        </div>
    </div>
    </div>
@endsection
