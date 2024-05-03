<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class databukuController extends Controller
{
    public function bukuPage()
    {
        return view('buku');
    }
}
