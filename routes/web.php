<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Home_AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

// Rute untuk Home
Route::resource('/', HomeController::class);
Route::resource('/About', AboutController::class);
Route::resource('Projects', ProjectsController::class);
Route::get('/projects-Users', [ProjectsController::class, 'users'])->name('projects.user');
Route::resource('Contact', ContactController::class);
Route::resource('/Post', PostController::class);

// Url Projects
Route::get('/Game-Samurai', function () {
    return view('samurai-game/in-game', ['title' => 'MyProfile-Zamzam-Samurai-game']);
});
