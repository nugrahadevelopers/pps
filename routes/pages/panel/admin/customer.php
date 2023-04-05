<?php

use App\Http\Controllers\Panel\Admin\Customer\CustomerController;
use Illuminate\Support\Facades\Route;

Route::resource('/customers', CustomerController::class, [
    'as' => 'panel.admin'
]);
