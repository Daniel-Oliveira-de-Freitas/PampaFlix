@extends('fragmentos.main')
@section('title', 'Alterar Informa��es!')
@section('content')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <div class="bg-principal text-white flex  justify-content h-screen">
        <div class="mt-1%">
            <img src="" alt="">
            <h1 class="">Home > Alterar cadastro</h1>

            <div class="">
                <div class="container">
                    <label class="nomeUsuario" for="uname"><b>Nome</b></label>
                    <label class="actualName" for="uname"><b>John</b></label>
                </div>

                <div>
                    <label class="senhaUsuario" for="psw"><b>Senha</b></label>
                    <label class="password" for="psw"><b>*******</b></label>
                </div>

                <div>
                    <label class="sobrenomeUsuario" for="sobrenome"><b>Sobrenome</b></label>
                    <label class="nomeBueno" for="sobrenome"><b>Doe</b></label>
                </div>

                <div>
                    <label class="emailUsuario" for="email"><b>Email</b></label>
                    <label class="emailDeAlguem" for="email"><b>johndoe@example.com</b></label>
                </div>

                <div>
                    <button class="btnCadastroUsuario" type="submit">Editar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
