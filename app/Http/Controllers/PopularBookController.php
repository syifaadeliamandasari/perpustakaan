<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PopularBookController extends Controller
{
    public function index () {
        return view ('popular-book');
    }
}
