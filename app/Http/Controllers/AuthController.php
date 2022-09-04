<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showCandidateLoginForm()
    {
        return view('website.auth.candidate-login');
    }
    public function showCandidateRegisterForm()
    {
        return view('website.auth.candidate-register');
    }
    public function submitCandidateLoginForm(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('candidate')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('candidate.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function submitCandidateRegisterForm(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'unique:candidates,email'],
            'phone' => ['required', 'numeric'],
            'password' => ['required', 'confirmed'],
        ]);
        $credentials['password'] = Hash::make($request->password);
        $candidate = Candidate::create($credentials);

        Auth::guard('candidate')->login($candidate);

        return redirect()->route('candidate.dashboard');
    }

    public function candidateLogout(Request $request)
    {
        Auth::guard('candidate')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function showAdminLoginForm()
    {
        return view('admin.auth.admin-login');
    }
    public function submitAdminLoginForm(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
