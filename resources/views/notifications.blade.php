@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/notifications.css'])

<section class="container">

    <h1>Bienvenue sur la page des demandes d'amies</h1>

    <p>Ici vous trouverez toutes les demandes d'amies que les autres utilisateurs vous envoient</p>

    @foreach($notifs as $notif)

    <div class="users">
        <div class="info">
            <p>Vous avez une demande d'ami de la part de :
                <a href="{{ route('profile.show', ['id' => $senders[$notif->sender_id]->id]) }}">{{ $senders[$notif->sender_id]->surname }}</a>
            </p>
        </div>
        <div class="answer">
            @if($notif->status === 'en attente')
                <form action="{{ route('notif.add', ['id' => $notif->id]) }}" method="post" class="form-notif">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="status" value="acceptée">
                    <button type="submit" name="submit">✅</button>
                </form>
                <form action="{{ route('notif.reject', ['id' => $notif->id]) }}" method="post" class="form-notif">
                    @method('POST')
                    @csrf
                    <input type="hidden" name="status" value="refusée">
                    <button type="submit" name="submit">❌</button>
                </form>
            @endif
        </div>
    </div>

    @endforeach

</section>

@endsection