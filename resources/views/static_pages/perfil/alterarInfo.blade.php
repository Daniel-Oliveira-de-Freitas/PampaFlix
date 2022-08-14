@extends('fragmentos.main')
@section('title', 'Editar Usuario - Pampa Flix')
@section('content')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <div class="bg-principal text-white flex  justify-content h-screen">
        <h1 class="mt-1%">Home > Editar Usuario</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf   
            <div class="container">
                <label class="nome" for="uname"><b>Nome</b></label>
                <input class="rectangle1" type="text"name="uname" value="{{$user->name}}" required>
            </div>

            <div class="container ">
                <label class="sobrenome" for="sobrenome"><b>Sobrenome</b></label>
                <input class="rectangle6" type="text"name="sobrenome" value="{{$user->lastN ame}}" required>
            </div>

            <div class="container ">
                <label class="email" for="email"><b>Email</b></label>
                <input class="rectangle5" type="text" name="email" value="{{$user->email}}" required>
            </div>

            <div class="container mt-5%">
                <div class="container ">
                    <input class="rectangle4" type="password" name="psw" value="{{$user->password}}" required>
                </div>
                <div>
                    <label class="confirmarSenha" for="psw"><b>Senha</b></label>
                </div>
            </div>

            <div class="container mt-5%">
                <div class="btnCadastro rcorners4">
                    <button type="submit">Salvar Edição</button>
                </div>
            </div>
        </form>
    </div>
@endsection
