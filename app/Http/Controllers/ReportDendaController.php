<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportDendaController extends Controller
{
    public function index()
    {
        return view('DashboardAdmin.Denda.reportDenda');
    }
}
