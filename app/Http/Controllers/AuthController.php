<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create($validated);
        
        Auth::login($user);

        return redirect()->route('tasks.index')->with('success', 'Registration successful. Please log in.');
    }

    public function login()
    {

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); //this method will remove any other data associated with the session
        $request->session()->regenerateToken(); //this method will regenerate the CSRF token to prevent CSRF attacks
        return redirect()->route('show.login')->with('success', 'Logged out successfully.');
    }
}
