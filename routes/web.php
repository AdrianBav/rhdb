<?php

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

Route::get('/albums', function () {
    return App\Album::all();
});

Route::get('/albums/{id}/songs', function ($albumId) {
    return App\Album::find($albumId)->songs;
});

Route::get('/concerts', function () {
    return App\Concert::all();
});

Route::get('/concerts/{id}/songs', function ($concertId) {
    return App\Concert::find($concertId)->songs;
});
