@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/js/style.js'])


@foreach($users as $user)

<img src="{{ asset('images/logo.svg') }}" alt="Photo de profil">
<h2>{{ $user->surname }}</h2>
<p>{{ $user->gender }}</p>
<p>{{ $user->sexualorientation }}</p>
<p>{{ $user->romanticorientation }}</p>
<a href="{{ route('profile.show', ['id' => $user->id]) }}">Voir plus</a>
<br>

@endforeach

@endsection