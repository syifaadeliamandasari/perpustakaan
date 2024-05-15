<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForYouController extends Controller
{
    public function index () {
        return view ('foryou');
    }
}
