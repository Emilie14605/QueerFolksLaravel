<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blogs;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    // On affiche la page du profil avec toute les informations de l'utilisateurs concerné
    public function index($id)
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            $user = User::find($id);
            $romanticOrientation = str_replace('_', '-', $user->romanticorientation);
            $blogs = Blogs::where('post_user_id', $user->id)->get();
            return view('profile')->with('user', $user)->with('romanticOrientation', $romanticOrientation)->with('blogs', $blogs);
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

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:20'],
            'age' => ['required', 'numeric', 'min:18'],
            'description' => ['required', 'string', 'max:255'],
            'gender' => ['required', Rule::in(['Homme Cisgenre', 'Femme Cisgenre', 'Homme Transgenre', 'Femme Transgenre', 'Genderfluid', 'Genderqueer', 'Agenre'])],
            'sexualorientation' => ['required', Rule::in(['Homosexuelle', 'Bisexuelle', 'Pansexuelle', 'Demi-sexuelle', 'Asexuelle', 'Heterosexuelle'])],
            'romanticorientation' => ['required', Rule::in(['Homoromantique', 'Biromantique', 'Panromantique', 'Demi_romantique', 'Aromantique', 'Heteroromantique'])],
            'lookingfor' => ['required', Rule::in(['Relation Amicale', 'Relation Romantique', 'Relation Sexuelle'])],
        ]);

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->firstname = $request->firstname;
        $user->surname = $request->surname;
        $user->age = $request->age;
        $user->description = $request->description;
        $user->gender = $request->gender;
        $user->sexualorientation = $request->sexualorientation;
        $user->romanticorientation = $request->romanticorientation;
        $user->lookingfor = $request->lookingfor;

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
