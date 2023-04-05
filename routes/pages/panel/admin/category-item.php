<?php

use App\Http\Controllers\Panel\Admin\Item\CategoryItemController;
use Illuminate\Support\Facades\Route;

Route::resource('/category-item', CategoryItemController::class, [
    'as' => 'panel.admin'
]);
