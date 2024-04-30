<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class passwordforgotController extends Controller
{
    public function password()
    {
        return view('forgot');
    }
}
