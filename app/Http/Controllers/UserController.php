<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function login()
    {
        // Jika user sudah login, redirect ke halaman member
        if (Auth::check()) {
            return redirect()->route('member');
        }

        // Jika belum login, tampilkan halaman login
        return view('login');

    }
    public function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('member');
        }

        return redirect()->route('login')->with('error', 'Email atau password salah.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function registerProcess(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('login')->with('success', 'Account created successfully!');
        } catch (\Exception $e) {
            Log::error('Registration failed: ' . $e->getMessage()); // Tambahkan log
            return back()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }
    }

    public function register()
    {
        return view('register');
    }

    public function member()
    {
        $user = User::all();
        return view('member', compact('user'));
    }
}