<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeliveryTimeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Authentication
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/token', [AuthController::class, 'token']);

// Routes that need authentication
Route::group([
    'middleware' => 'auth:sanctum',
], function() {
    Route::get('/user', [UserController::class, 'show']);

    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders', [OrderController::class, 'store']);

});

// Application routes
Route::get('/products', [ProductController::class, 'index']);
Route::get('/delivery-time', [DeliveryTimeController::class, 'index']);
