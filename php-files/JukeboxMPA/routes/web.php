<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\GenreController;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", [WelcomeController::class, "welcome"]);
Route::get("/songs", [SongController::class, "showsongs"]);
Route::get("/genres", [GenreController::class, "showgenres"]);