@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/messages.css'])
@vite(['resources/js/style.js'])
@vite(['resources/js/messages.js'])



<div class="container">
    <h1>Envoyer un message</h1>
    <div class="form">
        <form action="{{ route('messagesajout') }}" method="POST" name="messages-form">
            @method('POST')
            @csrf
            <select name="receiver" id="receiver">
                <option value="">Sélectionnez un.e ami.e</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->surname }}</option>
                @endforeach
            </select>
            <label for="message"></label>
            <textarea name="content" id="content" cols="75" rows="5"></textarea>
            <button type="submit" name="submit">Envoyer</button>
        </form>
    </div>
    <button type="button" id="sent">Messages envoyés</button>
    <button type="button" id="received">Messages reçus</button>

    @foreach($messages as $message)
    <section class="messages" id="messages-received">
        <p>Nouveau Message</p>
        <i>{{ $message->created_at }}</i>
        <a href="{{ route('messagesdetails', ['id' => $message->id]) }}">Voir le message</a>
    </section>
    @endforeach
    @foreach($messagessent as $message)
    <section class="messages" id="messages-sent">
        <p>Message envoyé</p>
        <i>{{ $message->created_at }}</i>
        <a href="{{ route('messagesdetails', ['id' => $message->id]) }}">Voir le message</a>
    </section>
    @endforeach
</div>

@endsection