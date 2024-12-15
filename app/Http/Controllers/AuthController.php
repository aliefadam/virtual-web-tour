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
