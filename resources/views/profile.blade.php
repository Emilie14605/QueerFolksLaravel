@extends('layouthf')

@section('content')
    <section>
        <article>
            <img src="" alt="Photo de profil">
            <h1>Nom Prénom</h1>
        </article>
    </section>
    <div class="profile">
        <img src="" alt="">
        <form action="{{ route('logout') }}" method="POST">
        @method('POST')    
        @csrf
            <button type="submit" name="btn-logout">Se déconnecter</button>
        </form>
    </div>
@endsection