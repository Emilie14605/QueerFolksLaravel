<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    //
    public function seeBlogs()
    {
        if (Auth::guest()) {
            return view('index');
        } else {
            return view('blogs');
        }
    }
}
