<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class loginAdminController extends Controller
{
    public function adminPage()
    {
        return view('loginAdmin');
    }
    public function postadmin(Request $request)
{
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        return redirect()->intended('dashboardAdmin'); // or your desired route
    } else {
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}

}
