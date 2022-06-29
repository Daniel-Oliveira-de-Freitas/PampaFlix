    @extends('fragmentos.main')
    @section('title', 'Bem-vindo ao PampaFlix!')
    @section('content')
        <div class="bg-principal text-white">
            <div class="">
                <img src="" alt="">
                <h1 class="text-4xl text-center p-2">Proximos lançamentos de filmes</h1>
                <div
                    class="ml-2 mr-2 grid grid-cols-1 gap-1 sm:grid-cols-2 lg:grid-cols-4 sm:gap-2 flex content-center justify-content items-center ">
                    @foreach ($nowPlayingFilmes as $atuais)
                        <div class="card">
                            <img src="https://image.tmdb.org/t/p/w500/{{ $atuais['poster_path'] }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $atuais['title'] }}</h5>
                                <a href="{{ route('filme.descricao', $atuais['id']) }}" class="btn btn-primary">Ver
                                    mais</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <h1 class="text-4xl text-center p-2">Top series</h1>
                <div
                    class="ml-2 mr-2 mb-2 grid grid-cols-1 gap-1 sm:grid-cols-2 lg:grid-cols-4 sm:gap-2 flex content-center justify-content items-center ">
                    @foreach ($nowPlayingSeries as $atuais)
                        <div class="card">
                            <img src="https://image.tmdb.org/t/p/w500/{{ $atuais['poster_path'] }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $atuais['name'] }}</h5>
                                <a href="{{ route('serie.descricao', $atuais['id']) }}" class="btn btn-primary">Ver
                                    mais</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endsection
