<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/shop', function () {
    return view('pages.shop');
});


Route::get('/cart', [CartController::class, 'index'])->name('cart.index')->middleware('auth');