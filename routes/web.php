<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


Route::get('/', [ProductController::class, 'home']);
// checkout routes 
Route::get('/checkout', [OrderController::class, 'create']);
Route::post('/checkout', [OrderController::class, 'store']);

// order routes
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/{order}', [OrderController::class, 'show']);

// cart routes
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/add/{sku}', [CartController::class, 'add']);
Route::post('/cart/update/{sku}', [CartController::class, 'update']);
Route::post('/cart/remove/{sku}', [CartController::class, 'remove']);

// product routes
Route::resource('products', ProductController::class);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{sku}/edit', [ProductController::class, 'edit']);
Route::put('/products/{sku}', [ProductController::class, 'update']);
Route::delete('/products/{sku}', [ProductController::class, 'destroy']);
Route::resource('products', ProductController::class);
Route::get('/', [ProductController::class, 'home']);


