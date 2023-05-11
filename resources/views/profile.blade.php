@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/profil.css'])

<h1>{{ $user->surname }}</h1>

<section class="container">

    <div class="profile-picture">
        <img src="{{ asset('images/' . $user->id . '/' . $user->picture) }}" alt="photo de profil">
    </div>

    <div class="profile-informations">
        <a href="{{ route('profile.edit', ['id' => Auth::user()->id]) }}">Configurer le profil</a>

        <h3>Sexualité :</h3>
        <p>{{ $user->sexualorientation }}</p>

        <h3>Orientation Romantique :</h3>
        <p>{{ $romanticOrientation }}</p>

        <h3>Genre :</h3>
        <p>{{ $user->gender }}</p>
    </div>

    <div class="profile-social">
        @if(Auth::id() != $user->id)
            @if($status->contains('acceptée'))
                <form action="{{ route('friendrequest.send') }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="receiver_id" value="{{ $user->id }}">
                    <button type="submit" name="submit">Supprimer l'ami.e</button>
                </form>
                <br>
                <a href="{{ route('messages') }}">Accéder aux messages</a>
            @elseif($status->contains('refusée'))
                <br>
                <button type="button">Demande refusée</button>
            @elseif($status->contains('en attente'))
                <br>
                <button type="button">Demande en attente</button>
            @else
                <form action="{{ route('friendrequest.send') }}" method="post">
                    @method('POST') 
                    @csrf
                    <input type="hidden" name="receiver_id" value="{{ $user->id }}">
                    <button type="submit" name="submit">Ajouter en ami.e</button>
                </form>
                <br>
            @endif
        @else
            <br>
            <a href="{{ route('messages') }}">Accéder aux messages</a>
        @endif
    </div>

    <div class="profile-description">
        <h2>A propos de moi</h2>
        <p>{{ $user->description }}</p>
    </div>

    <div class="profile-blogs">
        <h2>Blogs</h2>
        <a href="{{ route('profile.blog') }}">Ajouter une publication</a>
        <div class="blog-list">
            @foreach($blogs as $blog)
                <div class="blog">
                    <div class="blog-header">
                        <h2>{{ $blog->title }}</h2>
                        <i>{{ $blog->created_at }}</i>
                    </div>
                    <div class="blog-content">
                        <img src="{{ asset('images/blogs/'. Auth::user()->id . '/' . $blog->picture) }}" alt="">
                        <p>{{ $blog->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>

@endsection