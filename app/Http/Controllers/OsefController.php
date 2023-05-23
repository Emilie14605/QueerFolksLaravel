<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OsefController extends Controller
{
    //
    public function test($surname)
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            $user = User::where('surname', $surname)->first();

            return view('osef')->with('user', $user);
        }
    }
}
