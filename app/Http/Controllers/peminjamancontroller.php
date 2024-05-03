<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peminjamancontroller extends Controller
{
    public function peminjamanPage()
    {
        return view('peminjaman');
    }
}
