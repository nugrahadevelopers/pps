<?php

namespace App\Http\Controllers\Panel\Admin\Transaction;

use App\DataTables\OrdersDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionInvoiceController extends Controller
{
    public function index(OrdersDataTable $datatable)
    {
        return $datatable->render('pages.panel.admin.transaction.invoice.index');
    }
}
