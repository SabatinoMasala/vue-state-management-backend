<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Authentication
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:sanctum');
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/token', [AuthController::class, 'token']);

// Application routes
Route::get('/products', [ProductController::class, 'index']);
