<?php

use App\Http\Controllers\Panel\Admin\Customer\CustomerController;
use App\Http\Controllers\Panel\Admin\Customer\CustomerSelect2Controller;
use Illuminate\Support\Facades\Route;

Route::resource('/customers', CustomerController::class, [
    'as' => 'panel.admin'
]);

Route::post('/customers/select2-dropdown', [CustomerSelect2Controller::class, 'getAll'])->name('panel.admin.customers.select2-dropdown');
