<?php

namespace App\Http\Controllers\Panel\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Item;
use Illuminate\Http\Request;

class TransactionSalesController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('created_at', 'DESC')->get();
        $items = Item::orderBy('created_at', 'DESC')->get();
        return view('pages.panel.admin.transaction.sales.index', [
            'customers' => $customers,
            'items' => $items,
        ]);
    }
}
