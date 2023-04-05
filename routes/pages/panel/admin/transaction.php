<?php

use App\Http\Controllers\Panel\Admin\Transaction\TransactionInvoiceController;
use App\Http\Controllers\Panel\Admin\Transaction\TransactionSalesController;
use Illuminate\Support\Facades\Route;

Route::get('/transactions/invoices', [TransactionInvoiceController::class, 'index'])->name('panel.admin.transactions.invoice.index');

Route::get('/transactions/sales', [TransactionSalesController::class, 'index'])->name('panel.admin.transactions.sales.index');
