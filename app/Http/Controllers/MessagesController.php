<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Messages;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use App\Models\FriendRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class MessagesController extends Controller
{
    //
    public function seeMessages()
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            // Cette partie est pour afficher seulement les amis dans les options du select
            $friends = FriendRequest::where('receiver_id', Auth::id())->where('status', 'acceptée')->get();
            $senderIds = $friends->pluck('sender_id');
            $users = User::whereIn('id', $senderIds)->get();

            // Cette partie sert à afficher seulement les messges dont l'tuilisateur est le/la destinataire
            $messages = Messages::whereIn('messages_receiver_id', [Auth::id()])->get();
            $senderId = $messages->pluck('messages_sender_id');
            $senders = User::whereIn('id', $senderId)->get();

            return view('messages')->with('messages', $messages)->with('senders', $senders)->with('users', $users);
        }
    }

    public function details($id)
    {
        if(Auth::guest())
        {
            return redirect()->route('login')->with('status', 'Vous devez vous connectez pour accéder à cette page');
        } else {
            $message = Messages::findOrFail($id);
            $sender = User::findOrFail($message->messages_sender_id);

            return view('messagesdetails')->with('message', $message)->with('sender', $sender);
        }
    }

    public function add(Request $request): RedirectResponse
    {
        $request->validate([
            'content' => ['required', 'string', 'max:255']
        ]);

        $user = Auth::user();
        $receiver = $request->input('receiver');
        $content = $request->input('content');

        $messages = new Messages();
        $messages->content = $content;
        $messages->messages_sender_id = $user->id;
        $messages->messages_receiver_id = $receiver;
        $messages->save();

        return redirect('messages')->with('success', "Le message a été envoyé");
    }
}
