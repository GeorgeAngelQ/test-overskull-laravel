<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'index']);
    Route::get('categories/{id}', [\App\Http\Controllers\CategoryController::class, 'show']);
    Route::post('categories', [\App\Http\Controllers\CategoryController::class, 'store']);
    Route::put('categories/{id}', [\App\Http\Controllers\CategoryController::class, 'update']);
    Route::delete('categories/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy']);

    Route::get('products', [\App\Http\Controllers\ProductController::class, 'index']);
    Route::get('products/{id}', [\App\Http\Controllers\ProductController::class, 'show']);
    Route::post('products', [\App\Http\Controllers\ProductController::class, 'store']);
    Route::put('products/{id}', [\App\Http\Controllers\ProductController::class, 'update']);
    Route::delete('products/{id}', [\App\Http\Controllers\ProductController::class, 'destroy']);
});
