@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/messages.css'])


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
            <textarea name="content" id="content" cols="60" rows="10"></textarea>
            <button type="submit" name="submit">Envoyer</button>
        </form>
    </div>
    @foreach($messages as $message)
    <div class="messages">
        <p>Nouveau Message</p>
        <i>{{ $message->created_at }}</i>
        <a href="{{ route('messagesdetails', ['id' => $message->id]) }}">Voir le message</a>
    </div>
    @endforeach
</div>

@endsection