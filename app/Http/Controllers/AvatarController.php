<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvatarController extends Controller
{
    //
    public function show()
    {
        if(Auth::guest())
        {
            return redirect()->route('login')->with('status', 'Vous devez vous connectez pour accéder à cette page');
        } else {
            return view('avatar');
        }
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $avatar_place = $request->input('avatar');

        $avatar = new Avatar();
        $avatar->avatar_user_id = $user->id;
        $avatar->avatar_place = $avatar_place;
        $avatar->save();

        return redirect('avatar')->with('success', "L'avatar a été ajouté");
    }
}
