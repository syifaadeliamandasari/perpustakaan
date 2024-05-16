<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginAdminController extends Controller
{
    public function adminPage()
    {
        return view('loginAdmin');
    }
}
