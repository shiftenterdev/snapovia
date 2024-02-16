<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    protected function credentials(Request $request): array
    {
        return ['email' => $request->email, 'password' => $request->password, 'status' => 1];
    }

    public function loginPost(AdminLoginRequest $request)
    {
        if (Auth::attempt($this->credentials($request))) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.login')
            ->with('error', 'Invalid email or password');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.login');
    }

    public function forgotPassword()
    {

    }

    public function forgotPasswordPost(Request $request)
    {

    }

    public function createPassword($token)
    {

    }

    public function createPasswordPost(Request $request)
    {
        return redirect()->route('admin.login');
    }
}
