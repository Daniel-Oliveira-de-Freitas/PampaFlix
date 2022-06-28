@extends('fragmentos.main')
@section('title', 'Series')
@section('content')


<div class="bg-principal text-white ">
    <div class="">
        <img src="" alt="">
        <h1 class="text-4xl text-center p-2">Home Séries</h1>
        <div class="ml-2 mr-2 grid grid-cols-1 gap-1 sm:grid-cols-2 lg:grid-cols-4 sm:gap-2 flex content-center justify-content items-center ">
            @foreach ($popularSeries as $serie)
                <div class="card">
                    <img src="https://image.tmdb.org/t/p/w500/{{$serie['poster_path']}}" alt="">
                    <div class="card-body mb-2 ">
                        <h5 class="card-title">{{$serie['name']}}</h5>
<<<<<<< HEAD
=======
                        <p class="card-text">{{$serie['overview']}}</p>
>>>>>>> 722a2e97a91e1a29e281b554dd90ade6fcb7bcf7
                        <a href="{{route('serie.descricao', $serie['id'])}}" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            @endforeach
        </div> 
    </div>
@endsection