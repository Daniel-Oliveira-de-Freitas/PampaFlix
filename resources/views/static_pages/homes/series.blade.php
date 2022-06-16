@extends('fragmentos.main')
@section('title', 'Series')
@section('content')


    <div class="bg-principal text-black flex  justify-content h-screen">
        <div class="">
            <img src="" alt="">
            <h1 class="">Home Series</h1>
            @foreach ($popularSeries as $serie)
                <div class="card">
                    <img src="https://image.tmdb.org/t/p/w500/{{$serie['poster_path']}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$serie['name']}}</h5>
                        <p class="card-text">{{$serie['overview']}}</p>
                        <a href="{{route('serie.descricao', $serie['id'])}}" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            @endforeach
        </div> 
    </div>
@endsection