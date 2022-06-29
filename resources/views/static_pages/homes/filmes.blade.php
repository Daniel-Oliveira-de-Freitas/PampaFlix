@extends('fragmentos.main')
@section('title', 'Filmes')
@section('content')


    <div class="bg-principal text-white">
        <div class="">
            <img src="" alt="">
            <h1 class="text-4xl text-center p-2">Home Filmes</h1>
            <div class="ml-2 mr-2 grid grid-cols-1 gap-1 sm:grid-cols-2 lg:grid-cols-4 sm:gap-2 flex content-center justify-content items-center ">
                @foreach ($popularFilmes as $filme)
                    <div class="card">
                        <img src="https://image.tmdb.org/t/p/w500/{{ $filme['poster_path'] }}" alt="">
                        <div class="card-body mb-2 ">
                            <h5 class="card-title">{{ $filme['title'] }}</h5>
                            <a href="{{ route('filme.descricao', $filme['id']) }}" class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
