<?php

use App\Http\Controllers\DescricaoController;
use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  [FilmesController::class, 'index']);
Route::get('/filmes', [FilmesController::class, 'indexFilmes'])->name('filme'); 
Route::get('/series', [FilmesController::class, 'indexSeries'])->name('serie');
Route::get('/filme/descricao/{filme}', [DescricaoController::class, 'descricaoFilme'])->name('filme.descricao');
Route::get('/serie/descricao/{serie}', [DescricaoController::class, 'descricaoSerie'])->name('serie.descricao');

