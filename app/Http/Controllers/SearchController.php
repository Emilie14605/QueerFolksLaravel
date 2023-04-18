<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    //
    public function seeSearch()
    {
        if (Auth::guest()) {
            return view('index');
        } else {
            return view('search');
        }
    }
}
