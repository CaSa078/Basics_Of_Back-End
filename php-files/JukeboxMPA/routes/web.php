<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PlaylistController;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", [WelcomeController::class, "welcome"]);
Route::get("/songs/all", [SongController::class, "showsongs"]);
Route::get("/genres/all", [GenreController::class, "showgenres"]);
Route::get("/playlist", [PlaylistController::class, "index"]);