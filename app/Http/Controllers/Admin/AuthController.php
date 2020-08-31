<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email'    => 'email|required',
            'password' => 'required'
        ]);
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
