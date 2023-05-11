@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/search.css'])

<h1>Profils des autres utilisateurs</h1>

<section class="container">

    @foreach($users as $user)
        <div class="user">
            <h2>{{ $user->surname }}</h2>
            <img src="{{ asset('images/'. $user->id . '/' . $user->picture) }}" alt="Photo de profil">
            <a href="{{ route('profile.show', ['id' => $user->id]) }}">Voir plus</a>
            <br>
        </div>
    @endforeach
    
</section>

<div class="links">
    {{ $users->links() }}
</div>


@endsection