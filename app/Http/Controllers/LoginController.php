<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showUserLoginForm()
    {
        return view('auth.login', ['url' => 'user']);
    }

    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function showPetugasLoginForm()
    {
        return view('auth.login', ['url' => 'petugas']);
    }

    public function userLogin(Request $request)
    {
        return $this->login($request, 'user');
    }

    public function adminLogin(Request $request)
    {
        return $this->login($request, 'admin');
    }

    public function petugasLogin(Request $request)
    {
        return $this->login($request, 'petugas');
    }

    private function login(Request $request, $role)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => $role])) {
            return redirect()->intended('/dashboard/' . $role);
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
