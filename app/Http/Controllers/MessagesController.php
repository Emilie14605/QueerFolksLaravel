<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    //
    public function seeMessages()
    {
        if (Auth::guest()) {
            return view('index');
        } else {
            return view('messages');
        }
    }
}
