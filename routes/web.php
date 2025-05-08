<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'show']);
Route::get('/home', [HomeController::class, 'show'])->name('home');
Route::get('/library', [LibraryController::class, 'show'])->name('library');
Route::get('/songs', [SongController::class, 'show'])->name('songs');