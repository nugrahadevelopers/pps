<?php

namespace App\Http\Controllers\Panel\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Services\Transaction\Sales\CreateOrderService;
use App\Services\Transaction\Sales\GenerateOrderCodeService;
use Illuminate\Http\Request;

class TransactionSalesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:sales_transaction_show'])->only('index');
        $this->middleware(['permission:sales_transaction_create'])->only('saveTransaction');
    }

    public function index(GenerateOrderCodeService $generateOrderCodeService)
    {
        return view('pages.panel.admin.transaction.sales.index', [
            "order_code" => $generateOrderCodeService->generate()
        ]);
    }

    public function saveTransaction(Request $request, CreateOrderService $createOrderService)
    {
        $createOrderService->create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Transaksi berhasil disimpan.',
        ]);
    }
}
