<?php

use App\Http\Controllers\DescricaoController;
use App\Http\Controllers\FilmesController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\LoginController::validate();
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
// Route::get('/', function () {
//     return "Teste";
// });
Route::get('/filmes', [FilmesController::class, 'indexFilmes'])->name('filme');
Route::get('/series', [FilmesController::class, 'indexSeries'])->name('serie');
Route::get('/filme/descricao/{filme}', [DescricaoController::class, 'descricaoFilme'])->name('filme.descricao');
Route::get('/serie/descricao/{serie}', [DescricaoController::class, 'descricaoSerie'])->name('serie.descricao');

// rotas de login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/registro', [LoginController::class, 'indexRegistro'])->name('registro');
Route::get('/alterarInfo', [LoginController::class, 'indexAlterarInfo'])->name('alterarInfo');
