<?php

use App\Http\Controllers\Panel\Admin\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', [ProfileController::class, 'edit'])->name('panel.admin.profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('panel.admin.profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('panel.admin.profile.destroy');
