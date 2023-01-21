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

$listComics = config("comics");

Route::get('/', function () {

    $comics = config("comics");

    return view('home', [
        "listComics" => $comics
    ]);
})->name("home");

Route::get('/comics/action-comics', function () {

    $comics = config("comics");

    return view('comics.actionComics', [
        "listComics" => $comics
    ]);
})->name("actionComics");
