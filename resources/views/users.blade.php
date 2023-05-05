@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/search.css'])
@vite(['resources/js/style.js'])

<section>

    @foreach($users as $user)
    <div class="user">
        <img src="{{ asset('images/'. $user->id . '/' . $user->picture) }}" alt="Photo de profil">
        <h2>{{ $user->surname }}</h2>
        <p>{{ $user->gender }}</p>
        <p>{{ $user->sexualorientation }}</p>
        <p>{{ $user->romanticorientation }}</p>
        <a href="{{ route('profile.show', ['id' => $user->id]) }}">Voir plus</a>
        <br>
    </div>

    @endforeach

</section>

@endsection