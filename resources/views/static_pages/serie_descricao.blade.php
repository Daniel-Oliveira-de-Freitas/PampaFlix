@extends('fragmentos.main')
@section('title', 'Descrição serie')
@section('content')
    <div class="bg-principal text-white w-full flex justify-content h-screen">
        <div class="ml-5 mt-8 text-center mr-2">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $serie['poster_path'] }}" alt="{{ $serie['name'] }}">
            <h1 class="mt-2">Pontuação do IMDB: {{ $serie['popularity'] }}</h1>
        </div>
        <div>
            <div class="ml-5">
                <div class="text-xl mt-5% space-y-3">
                    <h1 class="text-6xl mb-2%">{{ $serie['name'] }}</h1>
                    <span>Número de episodios</span>
                    <h1>Data lançamento: {{ \Carbon\Carbon::parse($serie['first_air_date'])->format('d/m/Y') }}</h1>
                    <h1>Genêros:</h1>
                    @foreach ($serie['genres'] as $genero)
                        <span class="ml-5">{{ $genero['name'] }}</span>
                    @endforeach
                    <h1>Sinopse:</h1>
                </div>
                <p class="mt-2%">{{ $serie['overview'] }} </p>

                <div class="mt-25% text-center ">
                    <p>Qual a sua avaliação para o filme?</p>
                    <div class="justify-center items-center flex">
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
        </div>
        <div class="items-center mr-5 mt-8  text-center">
            <span>Favoritar</span>
            <svg class="fill-current hover:text-orange-500 w-4" viewBox="0 0 24 24">
                <g data-name="Layer 2">
                    <path
                        d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                        data-name="star" />
                </g>
            </svg>
        </div>
    </div>
@endsection
