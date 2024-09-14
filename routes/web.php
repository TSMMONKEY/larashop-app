<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

// Single Product
Route::get('/single-product', function () {
    return view('pages.single-product');
})->name('product.name');

// All Products
Route::get('/products', function () {
    return view('pages.products');
})->name('products');
