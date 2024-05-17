<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginPetugasController extends Controller
{
    public function petugasPage()
    {
        return view('loginPetugas');
    }
}
