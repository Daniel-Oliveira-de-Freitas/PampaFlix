<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DescricaoController;
use App\Http\Controllers\FilmesSeriesController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/',  [FilmesSeriesController::class, 'index'])->name('home');
Route::get('/filmes', [FilmesSeriesController::class, 'indexFilmes'])->name('filme');
Route::get('/series', [FilmesSeriesController::class, 'indexSeries'])->name('serie');
Route::get('/filme/descricao/{filme}', [DescricaoController::class, 'descricaoFilme'])->name('filme.descricao');
Route::get('/serie/descricao/{serie}', [DescricaoController::class, 'descricaoSerie'])->name('serie.descricao');

// rotas de login

Route::get('/alterarInfo', [AuthenticatedSessionController::class, 'indexAlterarInfo'])->name('alterarInfo');
