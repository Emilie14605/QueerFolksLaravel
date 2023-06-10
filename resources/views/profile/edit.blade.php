<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl" style="font-family: 'Lato', sans-serif">
            {{ __('Paramètres') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-color: hsla(185, 64%, 72%, 0.506);">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}" style="background: hsl(122, 39%, 59%); color: #FFFFFF; padding: 8px">Retour au Profil</a>
            <div class="p-4 sm:p-8 shadow sm:rounded-lg" style="background-color: hsla(200, 64%, 62%, 0.504);">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <div class="p-4 sm:p-8 shadow sm:rounded-lg" style="background-color: hsla(200, 64%, 62%, 0.504);">
                <div class="max-w-xl">
                    @include('profile.partials.image-user-form')
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" style="background-color: hsla(200, 64%, 62%, 0.504);">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 shadow sm:rounded-lg" style="background-color: hsla(200, 64%, 62%, 0.504);">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>