@extends('fragmentos.main')
@section('title', 'Bem-vindo ao PampaFlix!')
@section('content')
    <div class="bg-principal text-white flex  justify-content h-screen">
        <div class="">
            <img src="" alt="">
            <h1 class="">Home > Login</h1>
            <div class="container">
                <label for="email">Email do usu�rio</label>
                <input type="text"name="email" required>

                <label for="psw">Senha do usu�rio</label>
                <input type="password" name="psw" required>
            </div>
        </div>
    </div>
@endsection
