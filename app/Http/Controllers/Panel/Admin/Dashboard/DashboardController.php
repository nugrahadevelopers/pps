<?php

namespace App\Http\Controllers\Panel\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('pages.panel.admin.dashboard.index');
    }
}
