<section style="font-family: 'Lato', sans-serif">

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Photo de profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Choisissez ou modifier votre photo de profil") }}
        </p>
    </header>
    @if (session('status'))
    <div class="alert alert-warning">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <x-input-label for="picture" :value="__('')" />
            <x-text-input id="picture" name="picture" type="file" capture="gallery" class="mt-1 block w-full" :value="old('picture')" autofocus autocomplete="picture" />
            <x-input-error class="mt-2" :messages="$errors->get('picture')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button style="background: hsl(122, 39%, 59%); color: #FFFFFF; margin-top: 20px">{{ __('Enregistrer la photo de profil') }}</x-primary-button>
        </div>
    </form>


</section>