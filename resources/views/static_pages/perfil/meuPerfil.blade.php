@extends('fragmentos.main')
@section('title', 'Meu Perfil - PampaFlix')
@section('content')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    
<div class="bg-principal text-white flex justify-content h-screen">
    <label class="flex text-center justify-center ">Meu Perfil</label>
        <div class="mt-1%">
            <label>Home > Meu perfil</label>

            <div>
                <div class="container">
                    <label class="nomeUsuario" for="uname"><b>Nome</b></label>
                    <label class="actualName" for="uname">{{$user->name}}</label>
                </div>

                <div>
                    <label class="senhaUsuario" for="psw"><b>Senha</b></label>
                    <label class="password" for="psw">*******</label>
                </div>

                <div>
                    <label class="sobrenomeUsuario" for="sobrenome"><b>Sobrenome</b></label>
                    <label class="nomeBueno" for="sobrenome">{{$user->lastName}}</label>
                </div>

                <div>
                    <label class="emailUsuario" for="email"><b>Email</b></label>
                    <label class="emailDeAlguem" for="email">{{$user->email}}</label>
                </div>

                <div>
                    <a type="button" class="btnCadastroUsuario" href="/alterarInfo">Editar Informações</a>
                </div>
            </div>
        </div>
    </div>
@endsection
