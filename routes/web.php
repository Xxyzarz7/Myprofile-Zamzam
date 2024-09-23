<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class);
Route::resource('/About', AboutController::class);
Route::resource('/Projects', ProjectsController::class);
Route::resource('/Contact', ContactController::class);
Route::resource('/Post', PostController::class);

Route::get('/Game-Samurai', function () {
    return view('samurai-game/in-game', ['title' => 'MyProfile-Zamzam-Samurai-game']);
});