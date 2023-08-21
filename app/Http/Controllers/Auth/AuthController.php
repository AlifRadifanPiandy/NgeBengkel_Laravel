<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index_login()
    {
        return view('auth.login');
    }

    public function index_register()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'no_hp' => 'required|string|max:255',
            'password' => 'required|string|confirmed',
            'role_id' => 'required|integer',
        ]);

        $credentials['password'] = bcrypt($request->password);

        User::create($credentials);

        return redirect('/login')->with('success', 'Register success!');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('error', 'Login failed!');
    }

    public function logout(Request $request)
    {
        if(Auth::check()){
            Auth::logout();
        }
        return redirect('/login');
    }
}
