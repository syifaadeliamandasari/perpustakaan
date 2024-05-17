<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginUserController extends Controller
{
    public function userPage()
    {
        return view('loginUser');
    }
}
