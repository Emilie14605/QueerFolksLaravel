@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])

    <a href="{{ route('login') }}">Click</a>
    <div class="container messageaccueil">
        <h1>Queer&Folks</h1>
        <p>Bienvenue sur Queer&folks, un site de rencontre spécialement fait pour les membres de la communauté LGBTQUIA+, ici vous pourrez trouver des personnes recherchant la même chose que vous, que ça soit une rencontre d'un soir, plus longue ou simplement une amitié</p>
        <p>Pour accéder au site, vous pouvez vous créer un compte <a href="{{ route('login') }}">ici</a></p>
    </div>
    <div class="container">
        <form action="{{ route('messagesajout') }}" method="POST" name="messages-form">
        @method('POST')
        @csrf
            <select name="receiver" id="receiver">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->surname }}</option>
                @endforeach
            </select>
            <label for="message"></label>
            <textarea name="message" id="message" cols="60" rows="10"></textarea>
            <button type="submit" name="submit">Envoyer</button>
        </form>
    </div>
@endsection