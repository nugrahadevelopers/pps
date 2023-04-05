<?php

namespace App\Http\Controllers\Panel\Admin\Item;

use App\DataTables\CategoryItemsDataTable;
use App\Http\Controllers\Controller;
use App\Models\CategoryItem;
use Illuminate\Http\Request;

class CategoryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryItemsDataTable $datatable)
    {
        return $datatable->render('pages.panel.admin.category-item.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryItem $categoryItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryItem $categoryItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryItem $categoryItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryItem $categoryItem)
    {
        //
    }
}
