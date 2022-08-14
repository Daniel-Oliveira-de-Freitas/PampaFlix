@extends('fragmentos.main')
@section('title', 'Cadastro de usuario - PampaFlix')
@section('content')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <div class="bg-principal text-white flex  justify-content h-screen">
        <h1 class="mt-1%">Home > Registro</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf   
            <div class="container">
                <label class="nome" for="uname"><b>Nome</b></label>
                <input class="rectangle1" type="text"name="uname" required>
            </div>

            <div class="container ">
                <label class="sobrenome" for="sobrenome"><b>Sobrenome</b></label>
                <input class="rectangle6" type="text"name="lastname" required>
            </div>

            <div class="container ">
                <label class="email" for="email"><b>Email</b></label>
                <input class="rectangle5" type="text" name="email" required>
            </div>

            <div class="container mt-5%">
                <div class="container ">
                    <label class="senha" for="psw"><b>Senha</b></label>
                    <input class="rectangle4" type="password" name="psw" required>
                    <div>
                        <label class="confirmarSenha" for="psw"><b>Confirmar senha</b></label>
                        <input class="rectangle3" type="password" name="pswconfirm" required>
                    </div>
                </div>
            </div>

            <button class="btnCadastro rcorners4 container" type="submit">
                    <label>Salvar</label>
            </button>
            
            <div class="container mt-5%">
                <a class="sessao" href="{{ route('login') }}">Já possui uma conta? Faça o login</a>
            </div>
        </form>
    </div>
@endsection
