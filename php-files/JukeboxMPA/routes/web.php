<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
