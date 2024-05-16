<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUser extends Controller
{
    public function DashboardPage()
    {
        return view('dashboard');
    }
}
