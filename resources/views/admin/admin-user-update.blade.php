@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/css/admin-user.css', 'resources/js/app.js'])

<section class="container-update">
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" autocomplete="username" />
        </div>

        <div>
            <input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" autofocus autocomplete="name" />
        </div>

        <!-- Firstname -->
        <div>
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname', $user->firstname)" autofocus autocomplete="firstname" />
        </div>

        <!-- Surname -->
        <div>
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname', $user->surname)" autofocus autocomplete="surname" />
        </div>

        <!-- Age -->
        <div>
            <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age', $user->age)" autofocus autocomplete="age" />
        </div>

        <!-- Description -->
        <div>
            <textarea id="description" class="block mt-1 w-full" name="description">{{ $user->description }}</textarea>
        </div>


        <!-- Gender -->
        <div>
            <select id="gender" name="gender">
                <option value="">Sélectionnez un genre</option>
                <option value="Homme Cisgenre" {{ old('gender', $user->gender) === 'Homme Cisgenre' ? 'selected' : '' }}>Homme Cisgenre</option>
                <option value="Femme Cisgenre" {{ old('gender', $user->gender) === 'Femme Cisgenre' ? 'selected' : '' }}>Femme Cisgenre</option>
                <option value="Homme Transgenre" {{ old('gender', $user->gender) === 'Homme Transgenre' ? 'selected' : '' }}>Homme Transgenre</option>
                <option value="Femme Transgenre" {{ old('gender', $user->gender) === 'Femme Transgenre' ? 'selected' : '' }}>Femme Transgenre</option>
                <option value="Genderfluid" {{ old('gender', $user->gender) === 'Genderfluid' ? 'selected' : '' }}>Genderfluid</option>
                <option value="Genderqueer" {{ old('gender', $user->gender) === 'Genderqueer' ? 'selected' : '' }}>Genderqueer</option>
                <option value="Agenre" {{ old('gender', $user->gender) === 'Agenre' ? 'selected' : '' }}>Agenre</option>
            </select>
        </div>


        <!-- Sexual Orientation -->
        <div>
            <select id="sexualorientation" name="sexualorientation">
                <option value="">Sélectionnez une orientation sexuelle</option>
                <option value="Homosexuelle" {{ old('sexualorientation', $user->sexualorientation) === 'Homosexuelle' ? 'selected' : '' }}>Homosexuelle</option>
                <option value="Bisexuelle" {{ old('sexualorientation', $user->sexualorientation) === 'Bisexuelle' ? 'selected' : '' }}>Bisexuelle</option>
                <option value="Pansexuelle" {{ old('sexualorientation', $user->sexualorientation) === 'Pansexuelle' ? 'selected' : '' }}>Pansexuelle</option>
                <option value="Demi-sexuelle" {{ old('sexualorientation', $user->sexualorientation) === 'Demi-sexuelle' ? 'selected' : '' }}>Demi-sexuelle</option>
                <option value="Asexuelle" {{ old('sexualorientation', $user->sexualorientation) === 'Asexuelle' ? 'selected' : '' }}>Asexuelle</option>
                <option value="Heterosexuelle" {{ old('sexualorientation', $user->sexualorientation) === 'Heterosexuelle' ? 'selected' : '' }}>Heterosexuelle</option>
            </select>
        </div>

        <!-- Romantic Orientation -->
        <div>
            <select id="romanticorientation" name="romanticorientation">
                <option value="">Sélectionnez une orientation romantique</option>
                <option value="Homoromantique" {{ old('romanticorientation', $user->romanticorientation) === 'Homoromantique' ? 'selected' : '' }}>Homoromantique</option>
                <option value="Biromantique" {{ old('romanticorientation', $user->romanticorientation) === 'Biromantique' ? 'selected' : '' }}>Biromantique</option>
                <option value="Panromantique" {{ old('romanticorientation', $user->romanticorientation) === 'Panromantique' ? 'selected' : '' }}>Panromantique</option>
                <option value="Demi_romantique" {{ old('romanticorientation', $user->romanticorientation) === 'Demi_romantique' ? 'selected' : '' }}>Demi-romantique</option>
                <option value="Aromantique" {{ old('romanticorientation', $user->romanticorientation) === 'Aromantique' ? 'selected' : '' }}>Aromantique</option>
                <option value="Heteroromantique" {{ old('romanticorientation', $user->romanticorientation) === 'Heteroromantique' ? 'selected' : '' }}>Heteroromantique</option>
            </select>
        </div>

        <!-- Looking For -->
        <div>
            <select id="lookingfor" name="lookingfor">
                <option value="">Sélectionnez une orientation romantique</option>
                <option value="Relation Amicale" {{ old('lookingfor', $user->lookingfor) === 'Relation Amicale' ? 'selected' : '' }}>Relation Amicale</option>
                <option value="Relation Romantique" {{ old('lookingfor', $user->lookingfor) === 'Relation Romantique' ? 'selected' : '' }}>Relation Romantique</option>
                <option value="Relation Sexuelle" {{ old('lookingfor', $user->lookingfor) === 'Relation Sexuelle' ? 'selected' : '' }}>Relation Sexuelle</option>
            </select>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button style="background: hsl(122, 39%, 59%); color: #FFFFFF">{{ __('Enregistrer les modifications') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

@endsection