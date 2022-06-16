@extends('fragmentos.main')
@section('title', 'Filmes')
@section('content')


    <div class="bg-principal text-black flex  justify-content h-screen">
        <div class="">
            <img src="" alt="">
            <h1>Home Filmes</h1>
            @foreach ($popularFilmes as $filme)
                <div class="card">
                    <img src="https://image.tmdb.org/t/p/w500/{{$filme['poster_path']}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$filme['title']}}</h5>
                        <p class="card-text">{{$filme['overview']}}</p>
                        <a href="{{route('filme.descricao', $filme['id'])}}" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
                
            @endforeach
        </div>
    </div>

@endsection