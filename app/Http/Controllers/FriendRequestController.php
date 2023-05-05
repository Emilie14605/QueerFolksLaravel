<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FriendRequest;
use Illuminate\Support\Facades\Auth;

class FriendRequestController extends Controller
{
    // On envoie une demande d'ami dans la table friend_requests avec comme status par défaut "en attente"
    public function send(Request $request)
    {
        $sender_id = $request->input('sender_id');
        $receiver_id = $request->input('receiver_id');
        $status = $request->input('status');

        $friend_request = new FriendRequest();
        $friend_request->sender_id = $sender_id;
        $friend_request->receiver_id = $receiver_id;
        $friend_request->status = $status;
        $friend_request->save();

        return redirect()->back()->with('success', "La demande d'ami.e a été envoyée");
    }

    // Fonction pour accepter la demadne d'ami.e
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

    // Fonction pour refuser et supprimer la demande d'ami.e
    public function delete($id)
    {
        
        $del = FriendRequest::findOrFail($id);
        $del->delete();
        
        return redirect('notifications');
    }
}