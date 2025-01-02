<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view("login");
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'email tidak boleh kosong',
            'password.required' => 'password tidak boleh kosong'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            User::where('id', Auth::user()->id)->update([
                'last_seen' => now(),
                'is_online' => true,
            ]);

            return redirect()->route("dashboard");
        } else {
            return redirect()->route('login')->with('message', 'Email dan password tidak sesuai')->withInput();
        }
    }

    public function changePasswordPost(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password|min:5',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|same:password|min:5',
        ], [
            'old_password.required' => 'Password lama tidak boleh kosong',
            'old_password.current_password' => 'Password lama tidak sesuai',
            'old_password.min' => 'Password lama minimal 5 karakter',
            'password.required' => 'Password baru tidak boleh kosong',
            'password.min' => 'Password minimal 5 karakter',
            "password_confirmation.required" => "Konfirmasi password tidak boleh kosong",
            "password_confirmation.same" => "Konfirmasi password tidak sesuai",
            'password_confirmation.min' => "Konfirmasi password minimal 5 karakter",
        ]);

        $user = User::find(Auth::user()->id);
        $user->update([
            "password" => bcrypt($request->password),
        ]);

        return redirect()->route("dashboard")->with("message", [
            "title" => "Berhasil",
            "text" => "Password berhasil diubah",
            "icon" => "success",
        ]);
    }

    public function logout()
    {
        $user = User::find(Auth::user()->id);
        $user->update([
            "is_online" => false,
        ]);
        Auth::logout();
        return redirect()->route('login');
    }
}
