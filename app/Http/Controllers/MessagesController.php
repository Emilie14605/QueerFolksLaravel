<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //
    public function seeMessages()
    {
        return view('messages');
    }
}
