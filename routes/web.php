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
    return view('home');
})->name("home");

Route::get('/characters', function () {
    return view('characters.index');
})->name("characters.index");

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics.index', ["comics" => $comics]);
})->name("comics.index");

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    if(is_numeric($id) && $id >= 0 && $id < count($comics)){
        return view('comics.details', ["comic" => $comics[$id]]);
    } else {
        abort(404);
    }
})->name("comics.details");

Route::get('/movies', function () {
    return view('movies.index');
})->name("movies.index");

Route::get('/tv', function () {
    return view('tv.index');
})->name("tv.index");

Route::get('/games', function () {
    return view('games.index');
})->name("games.index");

Route::get('/collectibles', function () {
    return view('collectibles.index');
})->name("collectibles.index");

Route::get('/videos', function () {
    return view('videos.index');
})->name("videos.index");

Route::get('/fans', function () {
    return view('fans.index');
})->name("fans.index");

Route::get('/news', function () {
    return view('news.index');
})->name("news.index");

Route::get('/shop', function () {
    return view('shop.index');
})->name("shop.index");