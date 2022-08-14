<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FavoritosController;
use App\Http\Controllers\MeuPerfilController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('registro', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('registro', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {

    Route::get('/alterarInfo', [MeuPerfilController::class, 'init_Edit'])->name('alterarInfo');

    Route::get('/meuPerfil', [MeuPerfilController::class, 'index'])->name('alterarInfo');

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('/favoritos', [FavoritosController::class, 'index']);
    Route::post('/favoritar/filme/{filme}', [FavoritosController::class, 'storeFavoriteMovieItem'])->name('favoritar_filme');
    Route::post('/favoritar/serie/{serie}', [FavoritosController::class, 'storeFavoriteSerieItem'])->name('favoritar_serie');
});
