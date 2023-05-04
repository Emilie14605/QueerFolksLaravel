<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Supprimer Le compte') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Une fois que votre compte est supprimé, toutes vos informations seront supprimées.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Etes vous sure de vouloir supprimer votre compte ?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Etes vous sure de vouloir supprimer votre compte ?') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Mot de passe') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Mot de passe') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Annuler') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Supprimer le compte') }}
                </x-danger-button>
            </div>
        </form>
</section>
