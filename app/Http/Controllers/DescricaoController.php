<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DescricaoController extends Controller
{
    public function descricaoFilme($id)
    {
        $filme = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $id . '?language=pt-BR')
            ->json();
        return view('static_pages.descricoes.filme_descricao', ['filme' => $filme,]);
    }

    public function descricaoSerie($id)
    {
        $serie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/' . $id . '?language=pt-BR')
            ->json();

        return view('static_pages.descricoes.serie_descricao', ['serie' => $serie,]);
    }
}
