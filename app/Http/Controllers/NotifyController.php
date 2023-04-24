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
    // Fonction pour montrer les demandes d'ami
    public function show()
    {
        // On vérifie si l'utilisateur est connecté, sinon on le renvoie vers la page de connexion avec un message
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', "Vous devez vous connecter pour accéder à cette page");
        } else {
            // On récupère les demandes d'ami dans la table FriendRequest et on les ordonne par date de création du plus récent au plus ancien
            $notifs = FriendRequest::orderBy('created_at', 'DESC')->get();
            $receiverId = FriendRequest::pluck('receiver_id');
            $users = User::whereIn('id', $receiverId)->get();
            return view('notifications')->with('users', $users);
        }
    }

    public function add()
    {
        ;
    }

    public function del($id)
    {
        $del = FriendRequest::findOrFail($id);
        $del->delete();
        return redirect('notifications');
    }
}
