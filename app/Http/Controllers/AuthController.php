<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'name' => 'required|unique:users|max:30',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);

        if (!$user->save()) {
            return back()->with(['message' => 'Error with entered information']);
        }

        return back()->with(['message' => 'User Registered']);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credetials)) {
            return route('/feed');
        }

        return back()->with(['message' => 'Error with Email or Password']);
    }
}
