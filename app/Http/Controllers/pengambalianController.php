<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengambalianController extends Controller
{
    public function pengambalianPage()
    {
        return view('pengembalian');
    }
}
