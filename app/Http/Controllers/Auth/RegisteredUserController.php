<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'firstname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:20'],
            'age' => ['required', 'numeric', 'min:18'],
            'picture' => ['required', 'image', 'max:255'],
            'description' => ['required','string', 'max:255'],
            'gender' => ['required', Rule::in(['Homme Cisgenre', 'Femme Cisgenre', 'Homme Transgenre', 'Femme Transgenre', 'Genderfluid', 'Genderqueer', 'Agenre'])],
            'sexualorientation' => ['required', Rule::in(['Homosexuelle', 'Bisexuelle', 'Pansexuelle', 'Demi-sexuelle', 'Asexuelle', 'Heterosexuelle'])],
            'romanticorientation' => ['required', Rule::in(['Homorantique', 'Biromantique', 'Panromantique', 'Demi-romantique', 'Aromantique', 'Heteroromantique'])],
            'lookingfor' => ['required', Rule::in(['Relation Amicale', 'Relation Romantique', 'Relation Sexuelle'])],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'firstname' => $request->firstname,
            'surname' => $request->surname,
            'age' => $request->age,
            'picture' => $request->picture,
            'description' => $request->description,
            'gender' => $request->gender,
            'sexualorientation' => $request->sexualorientation,
            'romanticorientation' => $request->romanticorientation,
            'lookingfor' => $request->lookingfor,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
