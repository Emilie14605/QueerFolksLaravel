<?php

namespace App\Http\Controllers;

use App\Models\FriendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifyController extends Controller
{
    //
    public function show()
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', "Vous devez vous connecter pour accéder à cette page");
        } else {
            $notif = FriendRequest::orderBy('created_at', 'DESC')->get();
            return view('notifications')->with('notif', $notif);
        }
    }

    public function display()
    {
    }
}
