<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportPeminjamanController extends Controller
{
    public function index()
    {
        return view('DashboardAdmin.peminjaman.reportPeminjaman');
    }
}