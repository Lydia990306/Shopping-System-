<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    use App\Http\Controllers\ProductController;


};

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::post('/cart/add', [CartController::class, 'add']);
    Route::get('/cart', [CartController::class, 'view']);
    Route::post('/checkout', [OrderController::class, 'checkout']);
}