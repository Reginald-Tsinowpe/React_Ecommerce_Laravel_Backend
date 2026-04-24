<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthSessionController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json([
                "success" => true,
                "msg" => "Login Successful",
            ]);
            /* return redirect()->intended('dashboard'); */
        }
        return response()->json([
            "success" => false,
            "msg" => "Incorrect credentials provided",
        ]);
    }
    public function signup() {}
}
