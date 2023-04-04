<?php

use Illuminate\Support\Facades\Route;



Route::get('/chart1', [App\Http\Controllers\CategoryController::class, 'productsCount_chart'])->name('productsCount_chart');
Route::get('/chart2', [App\Http\Controllers\CategoryController::class, 'productsTotalPrice_chart'])->name('productsTotalPrice_chart');

Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('Categories');
Route::get('/createCategory', [App\Http\Controllers\CategoryController::class, 'createCategory'])->name('createCategory');
Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'addCategory'])->name('addCategory');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'allproducts'])->name('allproducts');
Route::get('/createProduct', [App\Http\Controllers\ProductController::class, 'createProduct'])->name('createProduct');
Route::post('/products', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('addProduct');




