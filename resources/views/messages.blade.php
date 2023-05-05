@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/messages.css'])

<section class="container">
    <h1>Envoyer un message</h1>
    <div class="form">
        <form action="{{ route('messages.ajout') }}" method="POST" name="messages-form">
            @method('POST')
            @csrf
            <label for="receiver">Destinataire</label>
            <select name="receiver" id="receiver">
                <option value="">Sélectionnez un.e ami.e</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $user->id == $user_id ? 'selected' : '' }}>{{ $user->surname }}</option>
                @endforeach
            </select>
            <label for="message">Message</label>
            <textarea name="content" id="content" cols="75" rows="5"></textarea>
            <button type="submit" name="submit">Envoyer</button>
        </form>
    </div>
    <h2><a href="{{ route('messages.sent') }}">Voir les messages envoyés</a></h2>
        @foreach($messages as $message)
        <section class="messages" id="messages-received">
            <p>Nouveau Message de {{ $user->surname }}</p>
            <i>{{ $message->created_at }}</i>
            <a href="{{ route('messages.details', ['id' => $message->id]) }}">Voir le message</a>
        </section>
        @endforeach

</section>

@endsection