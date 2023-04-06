<?php

namespace App\Http\Controllers\Panel\Admin\Customer;

use App\DataTables\CustomersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\StoreCustomerRequest;
use App\Http\Requests\Customer\UpdateCustomerRequest;
use App\Models\Customer;
use App\Services\Customer\CreateCustomerService;
use App\Services\Customer\DeleteCustomerService;
use App\Services\Customer\UpdateCustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:customer_show'])->only('index');
        $this->middleware(['permission:customer_create'])->only('store');
        $this->middleware(['permission:customer_update'])->only('update');
        $this->middleware(['permission:customer_delete'])->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(CustomersDataTable $datatable)
    {
        return $datatable->render('pages.panel.admin.customer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request, CreateCustomerService $createCustomerService)
    {
        $createCustomerService->create($request->validated());
        return redirect()->route('panel.admin.customers.index')->with('status', 'Pelanggan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer, UpdateCustomerService $updateCustomerService)
    {
        $updateCustomerService->update($customer, $request->validated());
        return redirect()->route('panel.admin.customers.index')->with('status', 'Data pelanggan berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer, DeleteCustomerService $deleteCustomerService)
    {
        $deleteCustomerService->delete($customer);
        return redirect()->route('panel.admin.customers.index')->with('status', 'Pelanggan berhasil dihapus.');
    }
}
