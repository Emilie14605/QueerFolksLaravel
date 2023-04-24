<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    //
    public function seeMessages()
    {
        if(Auth::guest())
        {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            $messages = Messages::orderBy('created_at', 'DESC')->get();
            $users = User::get();
            return view('messages')->with('messages', $messages)->with('users', $users);
        }    
    }

    public function add(Request $request): RedirectResponse
    {
        $request->validate([
            'content' => ['required', 'string', 'max:255']
        ]);

        $user = Auth::user();

        $messages = new Messages();
        $messages->content = $request->content;
        $messages->messages_sender_id = $user->id;
        $messages->messages_receiver_id = $request->receiver;
        $messages->created_at = now();
        $messages->updated_at = now();
        $messages->save();

        return redirect('messages')->with('success', "Le message a été envoyé");
    }
}
