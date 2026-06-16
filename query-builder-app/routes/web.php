<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/search', [ProductController::class, 'list'])
    ->name('products.list');

Route::post('/products/search', [ProductController::class, 'search'])
    ->name('products.search');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::post('/products/create', [ProductController::class, 'store'])
    ->name('products.store');