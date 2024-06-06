<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CategoryController::class, 'index'])->name('category');
Route::get('/category/{id}', [CategoryController::class, 'get'])->name('category.get');

Route::get('/product/{product}', [ProductController::class, 'get'])->name('product.get');

Route::get('/cart', [CartController::class, 'index'])->name('cart.get');
Route::post('/cart', [CartController::class, 'store'])->name('cart.post');
