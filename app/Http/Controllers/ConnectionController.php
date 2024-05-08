<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;

class ConnectionController extends Controller
{
    public function index()
    {
        return view('user.friends');
    }
    
    public function show()
    {
        return view('user.friends');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'follower_id' => 'required|different:followed_id',
            'followed_id' => 'required|different:follower_id',
        ]);

        $connection = new Connection();

        $connection->follower_id = $request->follower_id;
        $connection->followed_id = $request->followed_id;

        if (!$connection->save()) {
            return back()->with(['message' => 'Error with creating connection']);
        }
        
        return back()->with(['message' => 'User Followed']);
    }
}
