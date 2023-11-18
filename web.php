<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');


Route::get('/orders', [OrderController::class, 'orders']);
Route::get('/orders/create', [OrderController::class, 'index'])->name('orders.index');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/products', [AdminController::class, 'createProduct'])->name('admin.products');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/customers', [AdminController::class, 'customers'])->name('admin.customers');

    Route::get('/products/create', [AdminController::class, 'createProduct'])->name('admin.products.create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin.products.store');

});