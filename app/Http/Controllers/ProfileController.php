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
    public function seeProfile()
    {
        if(Auth::guest())
        {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            return view('profile');
        }    }

    public function logout()
    {
        Auth::logout();
        return redirect('index');
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
    public function update(ProfileUpdateRequest $request, $id): RedirectResponse
    {
        // $user = $request->user();

        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->firstname = $request->input('firstname');
        $user->surname = $request->input('surname');
        $user->age = $request->input('age');
        $user->picture = $request->input('picture');
        $user->description = $request->input('description');
        $user->gender = $request->input('gender');
        $user->sexualorientation = $request->input('sexualorientation');
        $user->romanticorientation = $request->input('romanticorientation');
        $user->lookingfor = $request->input('lookingfor');

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->storePublicly('public/images');
            $user->picture = asset(str_replace('public', 'storage', $path));
        }        

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return redirect()->route('parameters')->with('status', 'profile-updated');
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

        return Redirect::to('index');
    }
}
