<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class loginUserController extends Controller
{
    public function userPage()
    {
        return view('loginUser');
    }

    public function postLogin(Request $request)
{
    // Validasi login
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        // Cek apakah pengguna perlu mengganti kata sandi
        if (!$user->password_changed) {
            return redirect()->route('dashboard')->with('changePassword', true);
        }
        return redirect()->route('dashboard');
    }
    return redirect()->back()->withErrors(['email' => 'Email or password is incorrect']);
}
}
