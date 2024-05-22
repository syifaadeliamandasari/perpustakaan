<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBukuController extends Controller
{
    public function index()
    {
        return view('DashboardAdmin.Buku.adminBuku');
    }
}