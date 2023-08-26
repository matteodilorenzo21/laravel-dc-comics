<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// HOME
Route::get('/', function () {
    return view('home');
})->name('home');

// CHARACTERS
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// COMICS
Route::get('/comics', function () {
    return view('comics');
})->name('comics');

// SINGLE COMIC
Route::get('/comic/{index}', function ($index) {
    $comics = config('comics');
    $comic = $comics[$index];

    return view('comic', compact('comic'));
})->name('comic');

// MOVIES
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// TV
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// GAMES
Route::get('/games', function () {
    return view('games');
})->name('games');

// COLLECTIBLES
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// VIDEOS
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// FANS
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// NEWS
Route::get('/news', function () {
    return view('news');
})->name('news');

// SHOP
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
