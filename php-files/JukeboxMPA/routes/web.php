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
Route::get("/playlist/all", [PlaylistController::class, "index"]);

Route::get("/genres/create", [GenreController::class, "create"]);
Route::post("/genres/store", [GenreController::class, "store"]);

Route::get("/songs/create", [SongController::class, "create"]);
Route::post("/songs/store", [SongController::class, "store"]);

Route::get("/playlist/create", [PlaylistController::class, "create"]);
Route::post("/playlist/store", [PlaylistController::class, "store"]);
