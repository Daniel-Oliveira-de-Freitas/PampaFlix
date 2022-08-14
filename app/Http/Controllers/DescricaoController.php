<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DescricaoController extends Controller
{
    protected FavoritosController $fav;
    const token = 'services.tmdb.token';
    public function descricaoFilme($id)
    {
        $fav = new FavoritosController();
        $filme = Http::withToken(config(self::token))
        ->get('https://api.themoviedb.org/3/movie/' . $id . '?language=pt-BR')
        ->json();
        if ($fav->searchFavorite($id,'movie')->count() == 1) {
           return view('static_pages.descricoes.filme_descricao', ['filme' => $filme, 'favoritado' => true]);
        }else{
            return view('static_pages.descricoes.filme_descricao', ['filme' => $filme, 'favoritado' => false]);
        }
    }

    public function descricaoSerie($id)
    {
        $fav = new FavoritosController();
        $serie = Http::withToken(config(self::token))
            ->get('https://api.themoviedb.org/3/tv/' . $id . '?language=pt-BR')
            ->json();
            if ($fav->searchFavorite($id,'serie')->count() == 1) {
                return view('static_pages.descricoes.serie_descricao', ['serie' => $serie,'favoritado' => true]);
             }else{
                 return view('static_pages.descricoes.serie_descricao', ['serie' => $serie, 'favoritado' => false]);
             }
    }
}
