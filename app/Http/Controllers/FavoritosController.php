<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Favorite;
use Illuminate\Support\Facades\DB;

class FavoritosController extends Controller
{
  const token = 'services.tmdb.token';

  public function index()
  {
    $favorito = $this->getAllFavorite()->get();
    $meusFilmesFavoritos = [];
    $minhasSeriesFavoritas = [];
    foreach ($favorito as $fav) {
      if ($fav->movie_id !== null) {
        $meusFilmesFavoritos[] = $this->getContent($fav->movie_id, 'movie');
      } else if ($fav->serie_id !== null) {
        $minhasSeriesFavoritas[] = $this->getContent($fav->serie_id, 'tv');
      }
    }
    // dd($minhasSeriesFavoritas);

    // dd($meusFavoritos);
    return view('static_pages.homes.favoritos')->with(['meusFilmesFavoritos' => $meusFilmesFavoritos, 'minhasSeriesFavoritas' => $minhasSeriesFavoritas]);
  }

  public function getAllFavorite()
  {
    return DB::table('favorites')
      ->join('users', 'favorites.user_id', '=', 'users.id')
      ->where('users.id', '=', auth()->user()->id)->select('favorites.movie_id', 'favorites.serie_id');
  }

  public function searchFavorite($id,$type)
  {
    return DB::table('favorites')
      ->join('users', 'favorites.user_id', '=', 'users.id')
      ->where('users.id', '=', auth()->user()->id)->where($type . '_id', '=', $id)->select('favorites.movie_id', 'favorites.serie_id');
  }


  public function deleteFavorite($id, $type)
  {
    return DB::table('favorites')
      ->join('users', 'favorites.user_id', '=', 'users.id')
      ->where('users.id', '=', auth()->user()->id)->where($type . '_id', '=', $id)->delete();

      // ->where($type . '.id', '=', $id)
  }

  public function getContent($id, $tipo)
  {
    return Http::withToken(config(self::token))->get('https://api.themoviedb.org/3/' . $tipo . '/' . $id . '?language=pt-BR')->json();
  }


  public function storeFavoriteMovieItem($id)
  {
    if ($this->searchFavorite($id, 'movie')->count() == 0) {
      $user = auth()->user();
      $fav = new Favorite();
      $fav->movie_id =  $id;
      $fav->user_id = $user->id;
      $fav->save();
      return redirect()->back()->with('sucess', 'Adicionado aos favoritos!');
    } else {
      $this->deleteFavorite($id, 'movie');
      return redirect()->back()->with('sucess', 'Removido dos favoritos!');
    }
  }

  public function storeFavoriteSerieItem($id)
  {
    if ($this->searchFavorite($id, 'serie')->count() == 0) {
      $user = auth()->user();
      $fav = new Favorite();
      $fav->serie_id =  $id;
      $fav->user_id = $user->id;
      $fav->save();
      return redirect()->back()->with('sucess', 'Adicionado aos favoritos!!');
    } else {
      $this->deleteFavorite($id, 'serie');
      return redirect()->back()->with('sucess', 'Removido dos favoritos!');
    }
  }
}
