@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/notifications.css'])
@vite(['resources/js/style.js'])

<h1>Bienvenue sur la page des notifications</h1>

<div class="container">
    @foreach($notifs as $notif)
    <div class="users">
        <p class="demande">Vous avez une demande d'ami de la part de :
            <a href="{{ route('profile.show', ['id' => $senders[$notif->sender_id]->id]) }}">{{ $senders[$notif->sender_id]->surname }}</a>
        @if($notif->status === 'en attente')
        <form action="{{ route('notifyadd', ['id' => $notif->id]) }}" method="post">
            @method('PUT')
            @csrf
            <input type="hidden" name="status" value="acceptée">
            <button type="submit" name="submit">✅</button>
        </form>
        <form action="{{ route('notifydel', ['id' => $notif->id]) }}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" name="submit">❌</button>
        </form>
        @endif
        </p>
        <a href="{{ route('notifydetails', ['id' => $notif->id]) }}">Détails</a>
    </div>
    @endforeach
</div>

@endsection