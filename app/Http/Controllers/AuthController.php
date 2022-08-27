<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showCandidateLoginForm()
    {
        return view('website.auth.candidate-login');
    }
    public function submitCandidateLoginForm(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('candidate')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('candidate');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
