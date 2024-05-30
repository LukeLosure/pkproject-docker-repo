<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// PagesController Routes
Route::get('/index', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

// Closure Routes
Route::get('/hello', function () {
    return '<h1>Hello world!</h1>';
});
Route::get('/users/{id}', function ($id) {
    return 'This is a user ' . $id;
});

// Welcome Page Route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Resourceful Post Routes
Route::resource('post', 'App\Http\Controllers\PostsController');

