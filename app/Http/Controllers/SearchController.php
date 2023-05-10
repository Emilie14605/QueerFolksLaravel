<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    // Fonction pour voir la page de recherche, elle affiche tout les profis existant, à voir si on laisse la possiblité de recherche ou juste d'afficher et de cchercher avec la souris
    public function index()
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            $users = User::orderBy('created_at', 'DESC')->simplePaginate(3);

            return view('users')->with('users', $users);
        }
    }
}
