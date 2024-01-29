<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view("pages.profile");
    }
    public function updatePassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $oldPassword = $request->old_password;
        $newPassword = $request->new_password;

        if (Hash::check($oldPassword, $user->password)) {
            $user->update([
                "password" => Hash::make($newPassword),
            ]);
            return back()->with("success", "Berhasil memperbaharui Password");
        }
        return back()->with("fail", "Password lama yang anda masukkan salah");
    }

    public function update(Request $request)
    {
        $request->validate([
            "name" => "required",
            "username" => "required",
            "password" => "required"
        ]);

        $user = User::find(Auth::user()->id);

        if (Hash::check($request->password, $user->password)) {
            $user->update([
                "name" => $request->name,
                "username" => $request->username,
            ]);

            return back()->with("success", "Berhasil memperbaharui Profile");
        }
        return back()->with("fail", "Password yang anda masukkan salah");
    }
}
