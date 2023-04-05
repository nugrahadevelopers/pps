<?php

use App\Http\Controllers\Panel\Admin\User\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/users', UserController::class, [
    'as' => 'panel.admin'
]);
