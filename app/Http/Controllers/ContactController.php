<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    //
    public function seeContact()
    {
        if (Auth::guest()) {
            return view('index');
        } else {
            return view('contact');
        }
    }
}
