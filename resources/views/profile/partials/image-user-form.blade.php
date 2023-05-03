<section>

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Photo de profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Choisissez ou modifier votre photo de profil") }}
        </p>
    </header>

    <form action="{{ route('image.store') }}" method="post">
        @csrf
        <div>
            <x-input-label for="image" :value="__('')" />
            <x-text-input id="image" name="image" type="file" class="mt-1 block w-full" :value="old('image')" autofocus autocomplete="image" />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Enregistrer la photo de profil') }}</x-primary-button>
        </div>
    </form>


</section>