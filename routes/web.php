<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {
    require __DIR__ . '/pages/panel/admin/dashboard.php';
    require __DIR__ . '/pages/panel/admin/transaction.php';
    require __DIR__ . '/pages/panel/admin/customer.php';
    require __DIR__ . '/pages/panel/admin/category-item.php';
    require __DIR__ . '/pages/panel/admin/item.php';
    require __DIR__ . '/pages/panel/admin/profile.php';
    require __DIR__ . '/pages/panel/admin/user.php';
    require __DIR__ . '/pages/panel/admin/role.php';
});

require __DIR__ . '/pages/auth.php';
