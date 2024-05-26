<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportPengembalianController extends Controller
{
    public function index()
    {
        return view('DashboardAdmin.pengembalian.reportPengembalian');
    }
}