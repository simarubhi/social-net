<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;

class ConnectionController extends Controller
{
    public function index()
    {
        return view('user.feed');
    }
    
    public function show()
    {
        return view('user.feed');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'user1_id' => 'required|different:user2_id',
            'user2_id' => 'required|different:user1_id',
        ]);

        $connection = new Connection();

        $connection->user1_id = $request->user1_id;
        $connection->user2_id = $request->user2_id;

        if (!$connection->save()) {
            return back()->with(['message' => 'Error with creating connection']);
        }

        return view('user.feed');
    }
}
