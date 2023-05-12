@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/messages.css'])


<section class="container">

<div class="form">
    <form action="{{ route('messages.ajout') }}" method="POST" name="messages-form">
        @method('POST')
        @csrf
        <select name="receiver" id="receiver">
                <option value="{{ $user_id }}">{{ $surname }}</option>
        </select>
        <textarea name="content" id="content" cols="75" rows="5" placeholder="Message"></textarea>
        <button type="submit" name="submit">Envoyer</button>
    </form>
</div>


</section>

@endsection