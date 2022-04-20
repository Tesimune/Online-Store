<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'index'])->name('product.index');
Auth::routes();

Route::get('/admin/stats', [App\Http\Controllers\AdminController::class, 'stats'])->name('admin.stats');
Route::get('/admin/stock', [App\Http\Controllers\AdminController::class, 'stock'])->name('admin.stock');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/products/cart', [App\Http\Controllers\ProductController::class, 'cart'])->name('cart');

Route::get('products', [ProductController::class, 'index'])->name('product.index');
Route::get('products/create', [ProductController::class, 'create'])->name('product.create');
Route::get('products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::post('products/store', [ProductController::class, 'store'])->name('product.store');
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('products/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('product.delete');

Route::get('/search', \App\Http\Controllers\SearchController::class)->name('search');
