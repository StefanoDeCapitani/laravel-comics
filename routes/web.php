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
    $links = [
        [
            "route" => "characters",
            "name" => "characters"
        ],
        [
            "route" => "comics",
            "name" => "comics"
        ],
        [
            "route" => "movies",
            "name" => "movies"
        ],
        [
            "route" => "tv",
            "name" => "tv"
        ],
        [
            "route" => "games",
            "name" => "games"
        ],
        [
            "route" => "collectibles",
            "name" => "collectibles"
        ],
        [
            "route" => "videos",
            "name" => "videos"
        ],
        [
            "route" => "fans",
            "name" => "fans"
        ],
        [
            "route" => "news",
            "name" => "news"
        ],
        [
            "name" => "shop",
            "route" => "shop",
            "sub_links" => [
                [
                    "name" => "link",
                    "route" => "link"
                ]
            ]
        ],
    ];

    return view('home', ["nav_links" => $links]);
})->name("home");
