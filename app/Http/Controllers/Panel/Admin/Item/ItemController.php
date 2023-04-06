<?php

namespace App\Http\Controllers\Panel\Admin\Item;

use App\DataTables\ItemsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Item\CreateItemRequest;
use App\Http\Requests\Item\UpdateItemRequest;
use App\Models\Item;
use App\Services\Item\CreateItemService;
use App\Services\Item\DeleteItemService;
use App\Services\Item\UpdateItemService;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:item_show'])->only('index');
        $this->middleware(['permission:item_create'])->only('store');
        $this->middleware(['permission:item_update'])->only('update');
        $this->middleware(['permission:item_delete'])->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(ItemsDataTable $datatable)
    {
        return $datatable->render('pages.panel.admin.item.index');
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
    public function store(CreateItemRequest $request, CreateItemService $createItemService)
    {
        $createItemService->create($request->validated());
        return redirect()->route('panel.admin.items.index')->with('status', 'Item berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item, UpdateItemService $updateItemService)
    {
        $updateItemService->update($item, $request->validated());
        return redirect()->route('panel.admin.items.index')->with('status', 'Data item berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item, DeleteItemService $deleteItemService)
    {
        $deleteItemService->delete($item);
        return redirect()->route('panel.admin.items.index')->with('status', 'Item berhasil dihapus.');
    }
}
