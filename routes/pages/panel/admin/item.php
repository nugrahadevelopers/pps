<?php

use App\Http\Controllers\Panel\Admin\Item\ItemController;
use Illuminate\Support\Facades\Route;

Route::resource('/items', ItemController::class, [
    'as' => 'panel.admin'
]);
