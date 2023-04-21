<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParametersController extends Controller
{
    //
    public function seeParameters()
    {
        if(Auth::guest())
        {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            return view('parameters');
        }    
    }
}
