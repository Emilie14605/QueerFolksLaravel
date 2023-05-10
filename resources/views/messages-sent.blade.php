@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/messages.css'])

<section class="container">

<h1>Messages envoyés</h1>

@foreach($messages as $message)
    <section class="messages" id="messages-sent">
        <p>Message envoyé</p>
        <i>{{ $message->created_at }}</i>
        <a href="{{ route('messages.details', ['id' => $message->id]) }}">Voir le message</a>
    </section>
@endforeach

</section>

@endsection