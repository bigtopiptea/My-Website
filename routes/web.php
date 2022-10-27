<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Shop\ShopController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ShopController::class, 'index'])->name('shop');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //product
    Route::get('/admin/products', [ProductController::class, 'index'])->name('product.index');
    Route::delete('/admin/product/{id}', [ProductController::class, 'destroy'])->name('product.delete');

    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('category.index');
});
