<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ImageUploadController extends Controller
{
    // Fonction pour afficher la page pour l'upload des images

    public function index()
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            return view('image-form');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,pdf|max:16384'
        ]);
    
        $user = Auth::user();
    
        $imageName = time() . '.' . $request->image->extension();
        $path = 'images/' . $user->id;
    
        // Créer le dossier si nécessaire
        if(!file_exists($path)){
            mkdir($path, 0777, true);
        }
    
        // Enregistrer l'image dans le dossier créé
        $request->image->move($path, $imageName);
        
        // Mettre à jour le champ 'picture' de la table 'users' avec le nom de l'image téléchargée
        $user->update([
            'picture' => $imageName
        ]);
    
        return back()->with('status', 'Image enregistrée avec succès')->with('image', $imageName);
    }
}
