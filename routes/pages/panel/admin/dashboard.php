<?php

use App\Http\Controllers\Panel\Admin\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', DashboardController::class)->name('panel.admin.dashboard.index');
