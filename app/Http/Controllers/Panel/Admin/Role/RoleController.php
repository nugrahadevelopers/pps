<?php

namespace App\Http\Controllers\Panel\Admin\Role;

use App\DataTables\RolesDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:role_show'])->only('index');
        $this->middleware(['permission:role_create'])->only('store');
        $this->middleware(['permission:role_update'])->only('update');
        $this->middleware(['permission:role_delete'])->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(RolesDataTable $datatable)
    {
        return $datatable->render('pages.panel.admin.role.index');
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
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
