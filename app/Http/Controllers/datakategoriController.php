<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datakategoriController extends Controller
{
    public function kategori()
    {
        return view('kategoriPetugas');
    }
}
