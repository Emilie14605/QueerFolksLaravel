@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/avatar.css'])

<h1>Sélection d'avatars</h1>
<form action="{{ route('avatar.ajout') }}" method="post">
    @method('post')
    @csrf
    <label for="avatar1"><img src="{{ asset('images/avatars/LongBlondeHair.svg') }}" alt=""></label>
    <input type="radio" name="avatar1" id="avatar1" value="{{ asset('images/avatars/LongBlondeHair.svg') }}">
    <br>
    <label for="avatar2"><img src="{{ asset('images/avatars/LongBrownDarkHair.svg') }}" alt=""></label>
    <input type="radio" name="avatar2" id="avatar2" value="{{ asset('images/avatars/LongBrownDarkHair.svg') }}">
    <br>
    <label for="avatar3"><img src="{{ asset('images/avatars/LongDarkHair.svg') }}" alt=""></label>
    <input type="radio" name="avatar3" id="avatar3" value="{{ asset('images/avatars/LongDarkHair.svg') }}">
    <br>
    <label for="avatar4"><img src="{{ asset('images/avatars/LongBlondeHairBeard.svg') }}" alt=""></label>
    <input type="radio" name="avatar4" id="avatar4" value="{{ asset('images/avatars/LongBlondeHairBeard.svg') }}">
    <br>
    <label for="avatar5"><img src="{{ asset('images/avatars/LongBrownDarkHairBeard.svg') }}" alt=""></label>
    <input type="radio" name="avatar5" id="avatar5" value="{{ asset('images/avatars/LongBrownDarkHairBeard.svg') }}">
    <br>
    <label for="avatar6"><img src="{{ asset('images/avatars/LongDarkHairBeard.svg') }}" alt=""></label>
    <input type="radio" name="avatar6" id="avatar6" value="{{ asset('images/avatars/LongDarkHairBeard.svg') }}">
    <br>
    <label for="avatar7"><img src="{{ asset('images/avatars/ShortBlondeHair.svg') }}" alt=""></label>
    <input type="radio" name="avatar7" id="avatar7" value="{{ asset('images/avatars/ShortBlondeHair.svg') }}">
    <br>
    <label for="avatar8"><img src="{{ asset('images/avatars/ShortBrownDarkHair.svg') }}" alt=""></label>
    <input type="radio" name="avatar8" id="avatar8" value="{{ asset('images/avatars/ShortBrownDarkHair.svg') }}">
    <br>
    <label for="avatar9"><img src="{{ asset('images/avatars/ShortDarkHair.svg') }}" alt=""></label>
    <input type="radio" name="avatar9" id="avatar9" value="{{ asset('images/avatars/ShortDarkHair.svg') }}">
    <br>
    <label for="avatar10"><img src="{{ asset('images/avatars/ShortBlondeHairBeard.svg') }}" alt=""></label>
    <input type="radio" name="avatar10" id="avatar10" value="{{ asset('images/avatars/ShortBlondeHairBeard.svg') }}">
    <br>
    <label for="avatar11"><img src="{{ asset('images/avatars/ShortBrownDarkHairBeard.svg') }}" alt=""></label>
    <input type="radio" name="avatar11" id="avatar11" value="{{ asset('images/avatars/ShortBrownDarkHairBeard.svg') }}">
    <br>
    <label for="avatar12"><img src="{{ asset('images/avatars/ShortDarkHairBeard.svg') }}" alt=""></label>
    <input type="radio" name="avatar12" id="avatar12" value="{{ asset('images/avatars/ShortDarkHairBeard.svg') }}">
    <br>
    <label for="avatar13"><img src="{{ asset('images/avatars/Bald.svg') }}" alt=""></label>
    <input type="radio" name="avatar13" id="avatar13" value="{{ asset('images/avatars/Bald.svg') }}">
    <br>
    <label for="avatar14"><img src="{{ asset('images/avatars/BaldBlackBeard.svg') }}" alt=""></label>
    <input type="radio" name="avatar14" id="avatar14" value="{{ asset('images/avatars/BaldBlackBeard.svg') }}">
    <br>
    <label for="avatar15"><img src="{{ asset('images/avatars/BaldBlondeBeard.svg') }}" alt=""></label>
    <input type="radio" name="avatar15" id="avatar15" value="{{ asset('images/avatars/BaldBlondeBeard.svg') }}">
    <br>
    <label for="avatar16"><img src="{{ asset('images/avatars/BaldBrownDarkBeard.svg') }}" alt=""></label>
    <input type="radio" name="avatar16" id="avatar16" value="{{ asset('images/avatars/BaldBrownDarkBeard.svg') }}">
    <br>
    <button type="submit" id="submit">Valider</button>
</form>

@endsection