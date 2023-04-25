<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\FriendRequest;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class NotifyController extends Controller
{
    // Fonction pour montrer toutes les demandes d'ami concernant l'utilisateur
    public function show()
    {
        // On vérifie si l'utilisateur est connecté, sinon on le renvoie vers la page de connexion avec un message
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', "Vous devez vous connecter pour accéder à cette page");
        } else {
            // On récupère les demandes d'ami dans la table FriendRequest et on les ordonne par date de création du plus récent au plus ancien
            $notifs = FriendRequest::where('receiver_id', Auth::id())->orderBy('created_at', 'DESC')->get();
            $senderIds = FriendRequest::pluck('sender_id');
            $senders = User::whereIn('id', $senderIds)->get()->keyBy('id');

            return view('notifications', ['notifs' => $notifs, 'senders' => $senders]);
        }
    }

    public function details()
    {
        return view('notificationsdetails');
    }
}
