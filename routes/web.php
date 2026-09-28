<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Providers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);
Route::get('/examples', [Providers\example\index::class, 'index'])->name('examples.index');
Route::get('/orders', [Providers\order\index::class, 'index'])->name('orders.index');
Route::get('/order-rows', [Providers\orderrow\index::class, 'index'])->name('order-rows.index');
Route::get('/prices', [Providers\price\index::class, 'index'])->name('prices.index');
Route::resource('products', ProductController::class);
Route::get('/reviews', [Providers\review\index::class, 'index'])->name('reviews.index');
Route::get('/users', [Providers\user\index::class, 'index'])->name('users.index');
