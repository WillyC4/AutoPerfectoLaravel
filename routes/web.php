<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutosController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route ::resource('autos', AutosController::class);
});


Route::middleware(['guest'])->group(function () {
    Route ::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
    Route ::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
    Route ::post('/login', [AuthController::class, 'login'])->name('login');
    Route ::post('/register', [AuthController::class, 'register'])->name('register');
});

Route ::post('/logout', [AuthController::class, 'logout'])->name('logout');