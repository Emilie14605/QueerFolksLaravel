<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FriendRequest;
use Illuminate\Support\Facades\Auth;

class FriendRequestController extends Controller
{
    //
    public function add(Request $request)
    {
        $receiver_id = $request->receiver_id;
        $sender_id = Auth::user()->id;

        $friend_request = FriendRequest::create([
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id,
            'status' => 'en attente'
        ]);

        // Do something with the friend request (e.g. send a notification)

        return redirect()->back();
    }
}
