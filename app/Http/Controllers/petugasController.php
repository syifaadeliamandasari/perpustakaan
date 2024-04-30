<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugasController extends Controller
{
    public function petugasPage()
    {
        return view('petugas');
    }
}
