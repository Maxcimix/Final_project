<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'index'])->name('cart.index')->middleware('auth');