<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComparadorController;
use App\Http\Controllers\UsuariosController;

//---------- publico ----------//
Route::get('/', function () {
    return view('welcome');
});

//---------- admin y cliente ----------//
Route::middleware(['auth', 'role:admin,cliente'])->group(function () {
    Route::get('/comparar', [ComparadorController::class, 'index'])->name('comparar.index');

    Route::get('/comparar/seguridad', function () {
        return view('comparar.seguridad');
    })->name('comparar.seguridad');

    Route::get('/comparar/segmento', [ComparadorController::class, 'mostrarSegmento'])->name('comparar.segmento');

    Route::get('/comparar/ranking', function () {
        return view('comparar.ranking');
    })->name('comparar.ranking');

    Route::get('/comparar/seguridad_resultados', [ComparadorController::class, 'compararSeguridad'])->name('comparar.seguridad_resultados');

    Route::get('/comparar/segmento_resultados', [ComparadorController::class, 'compararSegmento'])->name('comparar.segmento_resultados');
    
    Route::get('/comparar/ranking_resultados', [ComparadorController::class, 'rankingAutos'])->name('comparar.ranking_resultados');
});

//---------- usuarios no identificados ----------//
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

//---------- usuarios identificados ----------//
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//---------- admin ----------//
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('autos', AutosController::class);
    Route::resource('usuarios', UsuariosController::class);
});

//---------- reto ----------//
Route::middleware(['auth'])->group(function () {
    Route::get('/comparar/precio', function () {
        return view('comparar.precio');
    })->name('comparar.precio');

    Route::get('/comparar/precio_resultados', [ComparadorController::class, 'compararPorPrecio'])->name('comparar.precio_resultados');
});