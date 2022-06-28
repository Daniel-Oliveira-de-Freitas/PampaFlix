@extends('fragmentos.main')
@section('title', 'Descrição serie')
@section('content')
<div class="bg-principal text-white md:h-max min-h-screen">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row ">
        <div class="flex-none">
            <img class="w-64 lg:w-96" src="{{ 'https://image.tmdb.org/t/p/w500/' . $serie['poster_path'] }}" alt="{{ $serie['name'] }}">
        </div>
        <div class="md:ml-24">
            <h1 class="font-semibold text-4xl lg:text-4xl">{{ $serie['name'] }}</h1>
            <div class="lg:text-xl mt-5% space-y-3">
                <h1 for="pontuação:">Pontuação: <span class="text-yellow-300">{{ $serie['vote_average'] }}</span></h1>
                <h1 for="data lançamento">Data lançamento: <span>{{ \Carbon\Carbon::parse($serie['first_air_date'])->format('d/m/Y') }}</span></h1>
                <div>
                    <label class="mb-1%">Genêros:</label>
                    @foreach ($serie['genres'] as $genero)
                        <span class="ml-5 p-1 bg-slate-500 rounded-md">{{ $genero['name'] }}</span>
                    @endforeach
                </div>
                <h1>Sinopse:</h1>
                @if ($serie['overview'] != null)
                    <p class="mt-2%">{{ $serie['overview'] }} </p>
                @else
                    <p>Sem sinopse</p>
                @endif
            </div>
            <div class="lg:mt-5% text-center ">
                <span>Qual a sua avaliação para o filme?</span>
                <div class="justify-center items-center flex cursor-pointer">
                    <svg class="fill-current hover:text-orange-500 w-4" viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                            <path
                                d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                data-name="star" />
                        </g>
                    </svg>
                    <svg class="fill-current hover:text-orange-500 w-4" viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                            <path
                                d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                data-name="star" />
                        </g>
                    </svg>
                    <svg class="fill-current hover:text-orange-500 w-4" viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                            <path
                                d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                data-name="star" />
                        </g>
                    </svg>
                    <svg class="fill-current hover:text-orange-500 w-4" viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                            <path
                                d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                data-name="star" />
                        </g>
                    </svg>
                    <svg class="fill-current hover:text-orange-500 w-4" viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                            <path
                                d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                data-name="star" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="items-center mr-5 mt-8  text-center cursor-pointer">
            <span>Favoritar</span>
            <div class="justify-center items-center flex cursor-pointer">
                <svg class="fill-current hover:text-orange-500 w-4">
                    <path
                        d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z" />
                    <path
                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                </svg>
            </div>
        </div>
    </div>
</div>
@endsection
