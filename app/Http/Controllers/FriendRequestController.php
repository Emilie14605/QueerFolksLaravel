<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\FriendRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class FriendRequestController extends Controller
{
    // On envoie une demande d'ami dans la table friend_requests avec comme status par défaut "en attente"
    public function send(Request $request)
    {
        $sender_id = Auth::id();
        $receiver_id = $request->input('receiver_id');
        $status = "en attente";

        $friend_request = new FriendRequest();
        $friend_request->sender_id = $sender_id;
        $friend_request->receiver_id = $receiver_id;
        $friend_request->status = $status;
        $friend_request->save();

        return redirect()->back()->with('success', "La demande d'ami.e a été envoyée");
    }

    // Fonction pour accepter la demande d'ami.e
    public function add(Request $request, $id)
    {
        $status = $request->input('status');

        $friend_request = FriendRequest::findOrFail($id);
        $friend_request->status = $status;
        $friend_request->save();

        return redirect('notifications');
    }

    public function reject(Request $request, $id)
    {
        $status = $request->input('status');

        $friend_request = FriendRequest::findOrFail($id);
        $friend_request->status = $status;
        $friend_request->save();

        return redirect('notifications');
    }

    public function remove($id)
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', "Vous devez vous connecter pour accéder à cette page");
        } else {
            $friendRequest = FriendRequest::where(function ($query) use ($id) {
                $query->where('sender_id', Auth::id())
                    ->where('receiver_id', $id);
            })->orWhere(function ($query) use ($id) {
                $query->where('sender_id', $id)
                    ->where('receiver_id', Auth::id());
            })->first();
    
            if (!$friendRequest) {
                return redirect()->route('profile.show', $id)->with('status', "La demande d'ami.e n'a pas été trouvée");
            }
    
            // Supprimer la demande d'amitié
            $friendRequest->delete();
    
            // Redirection avec un message de succès
            return back()->with('success', "La demande d'ami.e a été retirée avec succès");
        }
    }
    
}
