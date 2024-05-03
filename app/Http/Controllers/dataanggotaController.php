<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataanggotaController extends Controller
{
    public function anggotaPage()
    {
        return view('anggota');
    }
}
