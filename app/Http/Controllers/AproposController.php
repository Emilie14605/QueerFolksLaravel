<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AproposController extends Controller
{
    //
    public function seeApropos()
    {
        if (Auth::guest()) {
            return view('index');
        } else {
            return view('apropos');
        }
    }
}
