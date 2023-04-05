<?php

use App\Http\Controllers\Panel\Admin\Item\ItemController;
use App\Http\Controllers\Panel\Admin\Item\ItemSelect2Controller;
use Illuminate\Support\Facades\Route;

Route::resource('/items', ItemController::class, [
    'as' => 'panel.admin'
]);

Route::post('/items/select2-dropdown', [ItemSelect2Controller::class, 'getAll'])->name('panel.admin.items.select2-dropdown');
