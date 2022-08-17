@extends('fragmentos.main')
@section('title', 'Editar Usuario - Pampa Flix')
@section('content')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <main class="bg-principal text-white flex justify-content md:h-max min-h-screen">
        <form action="{{ route('alterarInfo_mudar') }}" method="POST">
            @csrf   
            <div class="container">
                <label class="nome" for="uname"><b>Nome</b></label>
                <input class="rectangle1" type="text" name="uname" value="{{$user->name}}" required>
            </div>

            <div class="container ">
                <label class="sobrenome" for="sobrenome"><b>Sobrenome</b></label>
                <input class="rectangle6" type="text" name="sobrenome" value="{{$user->lastName}}" required>
            </div>

            <div class="container ">
                <label class="email" for="email"><b>Email</b></label>
                <input class="rectangle5" type="text" name="email" value="{{$user->email}}" required>
            </div>

            <div class="container mt-5%">
                <div class="container ">
                    <label class="font-bold senha" for="psw">Senha</label>
                    <input class="rectangle4" type="password" name="psw" value="{{$user->password}}" required>
                </div>
            </div>

            <div class="container mt-5%">
                <div class="btnCadastro rcorners4">
                    <button type="submit">Salvar Edição</button>
                </div>
            </div>
        </form>
    </main>
@endsection
