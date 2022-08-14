@extends('fragmentos.main')
@section('title', 'Meus Favoritos')
@section('content')
    <div class="bg-principal text-white md:h-max min-h-screen">
        <div class="">
            <h1 class="text-4xl text-center p-2">Meus Favoritos</h1>
            <div class="ml-2 mr-2 grid grid-cols-1 gap-1 sm:grid-cols-2 lg:grid-cols-4 text-center sm:gap-2 flex content-center justify-content items-center ">
                @if ($meusFilmesFavoritos !== null && $minhasSeriesFavoritas !==  null)
                    <div
                        @foreach ($meusFilmesFavoritos as $favFilme)
                            <div class="card">
                                <img src="https://image.tmdb.org/t/p/w500/{{ $favFilme['poster_path'] }}" alt="">
                                <div class="card-body mb-2 ">
                                    <h4 class="text-xl card-title">{{ $favFilme['title'] }}</h4>
                                    <a href="{{ route('filme.descricao', $favFilme['id']) }}" class="btn btn-primary">Ver mais</a>
                                </div>
                            </div>
                        @endforeach
                        @foreach ($minhasSeriesFavoritas as $favSerie)
                        <div class="card">
                            <img src="https://image.tmdb.org/t/p/w500/{{$favSerie['poster_path']}}" alt="">
                            <div class="card-body mb-2 ">
                                <h5 class="card-title">{{$favSerie['name']}}</h5>
                                <a href="{{route('serie.descricao', $favSerie['id'])}}" class="btn btn-primary">Ver mais</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <label class="flex content-center justify-center">Você não possui favoritos</label>
                @endif
            </div>
        </div>
    </div>
@endsection
