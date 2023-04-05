<?php

use App\Http\Controllers\Panel\Admin\Role\RoleController;
use Illuminate\Support\Facades\Route;

Route::resource('/roles', RoleController::class, [
    'as' => 'panel.admin'
]);
