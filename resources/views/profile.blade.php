@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])

<section>
    <article>
        <img src="" alt="Photo de profil">
        <h1>Nom Prénom</h1>
    </article>
</section>
<a href="{{ route('notify') }}">Lien vers la page de notifications</a>
<form action="{{ route('friendRequest') }}" method="post">
    @method('POST')
    @csrf
    <button type="submit" name="submit">FR</button>
</form>
<div class="profile">
    <img src="" alt="">
    <form action="{{ route('logout') }}" method="POST">
        @method('POST')
        @csrf
        <button type="submit" name="btn-logout">Se déconnecter</button>
    </form>
</div>
@endsection