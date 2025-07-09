<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AutoController;

Route::get('/autos', [AutoController::class, 'index']);
Route::get('/autos/{id}', [AutoController::class, 'show']);
