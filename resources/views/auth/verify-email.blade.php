<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Merci de vous être inscrit.e ! Avant de commencer, vous pouvez vérifier votre email en cliquant sur le lien que nous venont de vous envoyer. Si vous n\'avez pas reçu ce mail, nous vous en enverrons un autre') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Un nouvel email de vérification a été envoyé') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Renvoyer l\'email de vérification') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Déconnexion') }}
            </button>
        </form>
    </div>
</x-guest-layout>
