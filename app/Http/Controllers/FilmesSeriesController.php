<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class FilmesSeriesController extends Controller
{
    public function index()
    {
        $nowPlayingFilmes = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/upcoming?language=pt-BR')
        ->json()['results'];
        $nowPlayingSeries = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/top_rated?language=pt-BR')
        ->json()['results'];
        return view('welcome')->with(['nowPlayingFilmes' => $nowPlayingFilmes, 'nowPlayingSeries'=> $nowPlayingSeries]);
    }
 
    public function indexFilmes()
    {
        $popularFilmes = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular?language=pt-BR')
            ->json()['results'];
        return view('static_pages.homes.filmes', ['popularFilmes' => $popularFilmes,]);
    }

    public function indexSeries()
    {
        $popularSeries = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/popular?language=pt-BR')
            ->json()['results'];
        return view('static_pages.homes.series', ['popularSeries' => $popularSeries,]);
    }
}
