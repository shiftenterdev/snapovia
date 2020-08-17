<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if (auth()->attempt($credentials)) {
//            dd(auth()->user()->role->id);
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back();
    }
}
