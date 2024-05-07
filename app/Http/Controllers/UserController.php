<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

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
        // $posts = Post::query()->where('user_id', $user->id)->get();
        $posts = $user->posts;
        return view('user.profile', ['user' => $user, 'posts' => $posts]);
    }
}
