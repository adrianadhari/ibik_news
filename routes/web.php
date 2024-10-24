<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index']);
Route::get('/{slug}', [FrontController::class, 'detail']);
Route::get('/category/{slug}', [FrontController::class, 'category']);
