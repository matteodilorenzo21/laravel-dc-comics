<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');

// CHARACTERS
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// INDEX COMICS
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// CREATE COMIC
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// SHOW COMIC
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// EDIT COMIC
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

// STORE COMIC
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

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
