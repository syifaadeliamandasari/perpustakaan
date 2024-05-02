<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datakategoriController extends Controller
{
    public function kategoriPage()
    {
        return view('kategori');
    }
}
