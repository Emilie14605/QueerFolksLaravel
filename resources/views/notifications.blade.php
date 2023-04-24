@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/notifications.css', 'resources/js/app.js'])

<h1>Bienvenue sur la page des notifications</h1>

<div class="container">
    @foreach($users as $user)
    <div class="users">
        <p class="demande">Vous avez une demande d'ami de la part de : <a href="{{ route('profile') }}">{{ $user->surname }}</a></p>
        <a href=""><img src="{{ asset('images/accept.svg') }}" alt="" class="accept"></a>
        <a href=""><img src="{{ asset('images/reject.svg') }}" alt="" class="reject"></a>
        <a href="{{ route('notifydetails', ['id' => $user->id]) }}">Détails</a>
    </div>
    @endforeach
</div>

@endsection