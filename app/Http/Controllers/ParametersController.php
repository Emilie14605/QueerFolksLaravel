<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParametersController extends Controller
{
    //
    public function seeParameters()
    {
        if (Auth::guest()) {
            return view('index');
        } else {
            return view('parameters');
        }
    }
}
