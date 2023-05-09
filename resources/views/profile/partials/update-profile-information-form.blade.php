<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __("Informations de l'utilisateur") }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Mettez jour les informations de votre compte") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Firstname -->
        <div>
            <x-input-label for="firstname" :value="__('Prénom')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname', $user->firstname)" autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Surname -->
        <div>
            <x-input-label for="surname" :value="__('Pseudo')" />
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname', $user->surname)" autofocus autocomplete="surname" />
            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
        </div>

        <!-- Age -->
        <div>
            <x-input-label for="age" :value="__('Age')" />
            <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age', $user->age)" autofocus autocomplete="age" />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>

        <!-- Description -->
        <div>
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" class="block mt-1 w-full" name="description" autofocus autocomplete="description">{{ $user->description }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>


        <!-- Gender -->
        <div>
            <x-input-label for="gender" :value="__('Genre')" />
            <select id="gender" name="gender" class="block mt-1 w-full" autofocus>
                <option value="">Sélectionnez un genre</option>
                <option value="Homme Cisgenre" {{ old('gender', $user->gender) === 'Homme Cisgenre' ? 'selected' : '' }}>Homme Cisgenre</option>
                <option value="Femme Cisgenre" {{ old('gender', $user->gender) === 'Femme Cisgenre' ? 'selected' : '' }}>Femme Cisgenre</option>
                <option value="Homme Transgenre" {{ old('gender', $user->gender) === 'Homme Transgenre' ? 'selected' : '' }}>Homme Transgenre</option>
                <option value="Femme Transgenre" {{ old('gender', $user->gender) === 'Femme Transgenre' ? 'selected' : '' }}>Femme Transgenre</option>
                <option value="Genderfluid" {{ old('gender', $user->gender) === 'Genderfluid' ? 'selected' : '' }}>Genderfluid</option>
                <option value="Genderqueer" {{ old('gender', $user->gender) === 'Genderqueer' ? 'selected' : '' }}>Genderqueer</option>
                <option value="Agenre" {{ old('gender', $user->gender) === 'Agenre' ? 'selected' : '' }}>Agenre</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>


        <!-- Sexual Orientation -->
        <div>
            <x-input-label for="sexualorientation" :value="__('Orientation Sexuelle')" />
            <select id="sexualorientation" name="sexualorientation" class="block mt-1 w-full" autofocus>
                <option value="">Sélectionnez une orientation sexuelle</option>
                <option value="Homosexuelle" {{ old('sexualorientation', $user->sexualorientation) === 'Homosexuelle' ? 'selected' : '' }}>Homosexuelle</option>
                <option value="Bisexuelle" {{ old('sexualorientation', $user->sexualorientation) === 'Bisexuelle' ? 'selected' : '' }}>Bisexuelle</option>
                <option value="Pansexuelle" {{ old('sexualorientation', $user->sexualorientation) === 'Pansexuelle' ? 'selected' : '' }}>Pansexuelle</option>
                <option value="Demi-sexuelle" {{ old('sexualorientation', $user->sexualorientation) === 'Demi-sexuelle' ? 'selected' : '' }}>Demi-sexuelle</option>
                <option value="Asexuelle" {{ old('sexualorientation', $user->sexualorientation) === 'Asexuelle' ? 'selected' : '' }}>Asexuelle</option>
                <option value="Heterosexuelle" {{ old('sexualorientation', $user->sexualorientation) === 'Heterosexuelle' ? 'selected' : '' }}>Heterosexuelle</option>
            </select>
            <x-input-error :messages="$errors->get('sexualorientation')" class="mt-2" />
        </div>

        <!-- Romantic Orientation -->
        <div>
            <x-input-label for="romanticorientation" :value="__('Orientation Romantique')" />
            <select id="romanticorientation" name="romanticorientation" class="block mt-1 w-full" autofocus>
                <option value="">Sélectionnez une orientation romantique</option>
                <option value="Homoromantique" {{ old('romanticorientation', $user->romanticorientation) === 'Homoromantique' ? 'selected' : '' }}>Homoromantique</option>
                <option value="Biromantique" {{ old('romanticorientation', $user->romanticorientation) === 'Biromantique' ? 'selected' : '' }}>Biromantique</option>
                <option value="Panromantique" {{ old('romanticorientation', $user->romanticorientation) === 'Panromantique' ? 'selected' : '' }}>Panromantique</option>
                <option value="Demi_romantique" {{ old('romanticorientation', $user->romanticorientation) === 'Demi_romantique' ? 'selected' : '' }}>Demi-romantique</option>
                <option value="Aromantique" {{ old('romanticorientation', $user->romanticorientation) === 'Aromantique' ? 'selected' : '' }}>Aromantique</option>
                <option value="Heteroromantique" {{ old('romanticorientation', $user->romanticorientation) === 'Heteroromantique' ? 'selected' : '' }}>Heteroromantique</option>
            </select>
            <x-input-error :messages="$errors->get('romanticorientation')" class="mt-2" />
        </div>

        <!-- Looking For -->
        <div>
            <x-input-label for="lookingfor" :value="__('Je recherche')" />
            <select id="lookingfor" name="lookingfor" class="block mt-1 w-full" autofocus>
                <option value="">Sélectionnez une orientation romantique</option>
                <option value="Relation Amicale" {{ old('lookingfor', $user->lookingfor) === 'Relation Amicale' ? 'selected' : '' }}>Relation Amicale</option>
                <option value="Relation Romantique" {{ old('lookingfor', $user->lookingfor) === 'Relation Romantique' ? 'selected' : '' }}>Relation Romantique</option>
                <option value="Relation Sexuelle" {{ old('lookingfor', $user->lookingfor) === 'Relation Sexuelle' ? 'selected' : '' }}>Relation Sexuelle</option>
            </select>
            <x-input-error :messages="$errors->get('lookingfor')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Enregistrer les modifications') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>