<?php

use App\Http\Controllers\Panel\Admin\Cart\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/cart/get/{custId}', [CartController::class, 'getCustomerCart'])->name('panel.admin.cart.get');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('panel.admin.cart.add');
