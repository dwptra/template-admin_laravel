<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            return back()->with("err", "Anda sudah login");
        }
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $user->last_login = now()->format("Y-m-d H:i:s");
            $user->save();

            Auth::login($user);
            return redirect('/dashboard');
        }
        return back()->with('fail', 'Username or Password Invalid');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
