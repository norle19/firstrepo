<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
   public function showRegisterForm()

    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // 🔒 Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // ✅ Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // 🔐 Log the user in
        Auth::login($user);

        // 👉 Redirect to dashboard or home page
        return redirect()->route('home');
    }
}
