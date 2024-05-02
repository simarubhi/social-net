<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function show(User $user)
    {

        return view('user.profile', ['user' => $user]);
    }

    public function showByName($name)
    {
        $user = User::where('name', $name)->firstOrFail();
        return view('user.profile', ['user' => $user]);
    }

    public function store(User $user)
    {
        return view('user.index', ['user' => $user]);
    }
}
