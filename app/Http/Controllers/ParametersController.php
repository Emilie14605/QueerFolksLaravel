<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParametersController extends Controller
{
    //
    public function seeParameters()
    {
        return view('parameters');
    }
}
