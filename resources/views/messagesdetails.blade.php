@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/messages.css'])

<section class="container">
    <h1>Message</h1>
    @if($message)

    <section class="messages">
        <p>Envoyeur.e : {{ $sender->surname }}</p>
        <p>{{ $message->content }}</p>
    </section>

    @endif
    
    <div class="form">
        <form action="{{ route('messages.ajout') }}" method="POST" name="messages-form">
            @method('POST')
            @csrf
            <select name="receiver" id="receiver">
                <option value="{{ $sender->id }}">{{ $sender->surname }}</option>
            </select>
            <label for="message"></label>
            <textarea name="content" id="content" cols="75" rows="5"></textarea>
            <button type="submit" name="submit">Envoyer</button>
        </form>
    </div>

</section>

@endsection