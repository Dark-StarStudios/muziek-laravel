<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\addMusicController;
use App\Http\Controllers\NewMusicController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'show']);
Route::get('/home', [HomeController::class, 'show'])->name('home');
Route::get('/library', [LibraryController::class, 'show'])->name('library');
Route::get('/songs', [SongController::class, 'show'])->name('songs');
Route::get('/addmusic', [AddMusicController::class, 'show'])->name('addmusic');
Route::post('/addmusic', [NewMusicController::class, 'store'])->name('addmusic');