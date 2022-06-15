<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FilmesController extends Controller
{
    public function index()
    {
        $popularFilmes = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];
        return view('welcome', ['popularFilmes' => $popularFilmes,]);
    }

    public function indexFilmes()
    {
        $popularFilmes = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];
        return view('static_pages.homes.filmes', ['popularFilmes' => $popularFilmes,]);
    }

    public function indexSeries()
    {
        $popularSeries = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/popular')
            ->json()['results'];
        return view('static_pages.homes.series', ['popularSeries' => $popularSeries,]);
    }
}