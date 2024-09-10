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

Route::get('/', function () {
$comics=config('comics');
$infos_shop = config('shop_info');
    return view('home',compact('comics','infos_shop') );
})->name('home');

Route::get('/Fumetti', function () {
    return view('comics');
})->name('comics');

Route::get('/Films', function () {
    return view('movies');
})->name('movies');


Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/Giochi', function () {
    return view('games');
})->name('games');

Route::get('/Collezionabili', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/Videos', function () {
    return view('videos');
})->name('videos');

Route::get('/Fans', function () {
    return view('fans');
})->name('fans');

Route::get('/Novità', function () {
    return view('news');
})->name('news');

Route::get('/Negozio', function () {
    return view('shop');
})->name('shop');