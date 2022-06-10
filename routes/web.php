<?php

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

Route::get('/', function () {
    return view('welcome');
});

 
Route::get('/filme/descricao', function () {
    return view('static_pages.filme_descricao');
});

Route::get('/filmes', function () {
    return view('static_pages.filmes');
});

Route::get('/filme/{id}', function ($id) {
    return view('static_pages.filme_descricao', ['id' => $id]);
});

Route::get('/series', function () {
    return view('static_pages.series');
});

Route::get('/series/{id}', function ($id) {
    return view('static_pages.serie_descricao', ['id' => $id]);
});