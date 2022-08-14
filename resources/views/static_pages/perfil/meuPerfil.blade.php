@extends('fragmentos.main')
@section('title', 'Meu Perfil - PampaFlix')
@section('content')
    <section class="bg-principal text-white md:h-max min-h-screen">
            <h2 class="text-5xl text-center">Meu Perfil</h2>
            <section class="mt-5% space-y-5 text-center">
                <div>
                    <h1 class="font-bold text-2xl" for="uname">Nome:</h1>
                    <label for="uname">{{ $user->name }}</label>
                </div>

                <div>
                    <h1 class="font-bold text-2xl" for="sobrenome">Sobrenome:</h1>
                    <label for="sobrenome">{{ $user->lastName }}</label>
                </div>

                <div>
                    <h1 class="font-bold text-2xl" for="email">Email:</h1>
                    <label for="email">{{ $user->email }}</label>
                </div>
            </section>
        <div class="text-center mt-5%">
            <a type="button" class="border-2 border-blue-500 p-2 rounded-md bg-blue-500 hover:bg-blue-800" href="/alterarInfo">Editar Informações</a>
        </div>
    </section>
@endsection
