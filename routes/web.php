<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Product;

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{id}/{category?}', [ProductController::class, 'detail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->controller(AdminController::class)->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/categories', [CategoryController::class, 'table'])->name('admin.categories.table');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::delete('/categories/{category}', [CategoryController::class, 'delete'])->name('admin.categories.delete');
    Route::get('/brands', [BrandController::class, 'table'])->name('admin.brands.table');
    Route::get('/brands/create', [BrandController::class, 'create'])->name('admin.brands.create');
    Route::post('/brands/store', [BrandController::class, 'store'])->name('admin.brands.store');
    Route::delete('/brands/{brand}', [BrandController::class, 'delete'])->name('admin.brands.delete');
    Route::delete('/products/{product}', [ProductController::class, 'delete'])->name('products.delete');
    Route::get('products', [ProductController::class, 'table'])->name('admin.products.table');
    Route::get('products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('products/store', [ProductController::class, 'store'])->name('admin.products.store');
});
