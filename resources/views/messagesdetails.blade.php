@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/js/style.js'])

@if($message)

    <div class="container">
        <h1>Message</h1>
        <p>Envoyeur.e : {{ $sender->surname }}</p>
        <p>{{ $message->content }}</p>
    </div>

@endif

@endsection