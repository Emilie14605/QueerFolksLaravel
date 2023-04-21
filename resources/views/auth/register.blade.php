<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Firstname -->
        <div>
            <x-input-label for="firstname" :value="__('Prénom')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Surname -->
        <div>
            <x-input-label for="surname" :value="__('Pseudo')" />
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus autocomplete="surname" />
            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
        </div>

        <!-- Age -->
        <div>
            <x-input-label for="age" :value="__('Age')" />
            <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus autocomplete="age" />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>

        <!-- Picture -->
        <div>
            <x-input-label for="picture" :value="__('Photo de profil')" />
            <input id="picture" class="block mt-1 w-full" type="file" name="picture" :value="old('picture')" required autofocus autocomplete="picture" />
            <x-input-error :messages="$errors->get('picture')" class="mt-2" />
        </div>

        <!-- Description -->
        <div>
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" class="block mt-1 w-full" name="description" required autofocus autocomplete="description">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>


        <!-- Gender -->
        <div>
            <x-input-label for="gender" :value="__('Genre')" />
            <select id="gender" name="gender" class="block mt-1 w-full" required autofocus>
                <option value="">Sélectionnez un genre</option>
                <option value="Homme Cisgenre" {{ old('gender') === 'Homme Cisgenre' ? 'selected' : '' }}>Homme Cisgenre</option>
                <option value="Femme Cisgenre" {{ old('gender') === 'Femme Cisgenre' ? 'selected' : '' }}>Femme Cisgenre</option>
                <option value="Homme Transgenre" {{ old('gender') === 'Homme Transgenre' ? 'selected' : '' }}>Homme Transgenre</option>
                <option value="Femme Transgenre" {{ old('gender') === 'Femme Transgenre' ? 'selected' : '' }}>Femme Transgenre</option>
                <option value="Genderfluid" {{ old('gender') === 'Genderfluid' ? 'selected' : '' }}>Genderfluid</option>
                <option value="Genderqueer" {{ old('gender') === 'Genderqueer' ? 'selected' : '' }}>Genderqueer</option>
                <option value="Agenre" {{ old('gender') === 'Agenre' ? 'selected' : '' }}>Agenre</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>


        <!-- Sexual Orientation -->
        <div>
            <x-input-label for="sexualorientation" :value="__('Orientation Sexuelle')" />
            <select id="sexualorientation" name="sexualorientation" class="block mt-1 w-full" required autofocus>
                <option value="">Sélectionnez une orientation sexuelle</option>
                <option value="Homosexuelle" {{ old('sexualorientation') === 'Homosexuelle' ? 'selected' : '' }}>Homosexuelle</option>
                <option value="Bisexuelle" {{ old('sexualorientation') === 'Bisexuelle' ? 'selected' : '' }}>Bisexuelle</option>
                <option value="Pansexuelle" {{ old('sexualorientation') === 'Pansexuelle' ? 'selected' : '' }}>Pansexuelle</option>
                <option value="Demi-sexuelle" {{ old('sexualorientation') === 'Demi-sexuelle' ? 'selected' : '' }}>Demi-sexuelle</option>
                <option value="Asexuelle" {{ old('sexualorientation') === 'Asexuelle' ? 'selected' : '' }}>Asexuelle</option>
                <option value="Heterosexuelle" {{ old('sexualorientation') === 'Heterosexuelle' ? 'selected' : '' }}>Heterosexuelle</option>
            </select>
            <x-input-error :messages="$errors->get('sexualorientation')" class="mt-2" />
        </div>

        <!-- Romantic Orientation -->
        <div>
            <x-input-label for="romanticorientation" :value="__('Orientation Romantique')" />
            <select id="romanticorientation" name="romanticorientation" class="block mt-1 w-full" required autofocus>
                <option value="">Sélectionnez une orientation romantique</option>
                <option value="Homoromantique" {{ old('romanticorientation') === 'Homoromantique' ? 'selected' : '' }}>Homoromantique</option>
                <option value="Biromantique" {{ old('romanticorientation') === 'Biromantique' ? 'selected' : '' }}>Biromantique</option>
                <option value="Panromantique" {{ old('romanticorientation') === 'Panromantique' ? 'selected' : '' }}>Panromantique</option>
                <option value="Demi-romantique" {{ old('romanticorientation') === 'Demi-romantique' ? 'selected' : '' }}>Demi-romantique</option>
                <option value="Aromantique" {{ old('romanticorientation') === 'Aromantique' ? 'selected' : '' }}>Aromantique</option>
                <option value="Heteroromantique" {{ old('romanticorientation') === 'Heteroromantique' ? 'selected' : '' }}>Heteroromantique</option>
            </select>
            <x-input-error :messages="$errors->get('romanticorientation')" class="mt-2" />
        </div>

        <!-- Looking For -->
        <div>
            <x-input-label for="lookingfor" :value="__('Je recherche')" />
            <select id="lookingfor" name="lookingfor" class="block mt-1 w-full" required autofocus>
                    <option value="">Sélectionnez une orientation romantique</option>
                    <option value="Relation Amicale" {{ old('lookingfor') === 'Relation Amicale' ? 'selected' : '' }}>Relation Amicale</option>
                    <option value="Relation Romantique" {{ old('lookingfor') === 'Relation Romantique' ? 'selected' : '' }}>Relation Romantique</option>
                    <option value="Relation Sexuelle" {{ old('lookingfor') === 'Relation Sexuelle' ? 'selected' : '' }}>Relation Sexuelle</option>
            </select>
            <x-input-error :messages="$errors->get('lookingfor')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Déjà inscrit ?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>