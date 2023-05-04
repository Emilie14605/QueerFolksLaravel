<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;

class ProfileController extends Controller
{
    // On affiche la page du profil avec toute les informations de l'utilisateurs concerné
    public function show($id)
    {
        if(Auth::guest())
        {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            $user = User::find($id);
            return view('profile')->with('user', $user);
        }    
    }

    // On déconnecte l'utilisateur avec un simple Auth::logout et on le redirige vers la page d'accueil où il devra se reconnecter ou se recréer un compte
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->firstname = $request->input('firstname');
        $user->surname = $request->input('surname');
        $user->age = $request->input('age');
        $user->description = $request->input('description');
        $user->gender = $request->input('gender');
        $user->sexualorientation = $request->input('sexualorientation');
        $user->romanticorientation = $request->input('romanticorientation');
        $user->lookingfor = $request->input('lookingfor');

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return redirect()->route('index')->with('status', 'profile-updated');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
