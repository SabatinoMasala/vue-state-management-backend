<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'api'
], function() {
    Route::get('/products', [ProductController::class, 'index']);
});
