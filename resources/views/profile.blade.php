@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js', 'resources/js/script.js'])
@vite(['resources/css/profil.css'])


<section class="container">

    <div class="profile-picture">
        <img src="{{ asset('images/' . $user->id . '/' . $user->picture) }}" alt="photo de profil">
    </div>


    <h1>{{ $user->surname }}</h1>


    <div class="profile-informations">

        @if(Auth::id() == $user->id)
            <a href="{{ route('profile.edit', ['id' => Auth::user()->id]) }}">Configurer le profil</a>
        @endif

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
                @if (session('success'))
                    <div class="alert alert-info" style="color: #4CAF50">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('friendrequest.remove', ['id' => $user->id]) }}" method="post" id="form-delete">
                    @method('DELETE')
                    @csrf
                    <button type="button" id="btn_del">Retirer l'ami.e</button>
                </form>
                <br>
                <a href="{{ route('messages.user', ['id' => $user->id]) }}">Envoyer un message</a>
            @elseif($status->contains('refusée'))
                <br>
                <button type="button" id="btn-reject">Demande refusée</button>
            @elseif($status->contains('en attente'))
                <br>
                <button type="button" id="btn-waiting">Demande en attente</button>
            @else
                @if (session('success'))
                    <div class="alert alert-info" style="color: #4CAF50">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('friendrequest.send') }}" method="post">
                    @method('POST') 
                    @csrf
                    <input type="hidden" name="receiver_id" value="{{ $user->id }}">
                    <button type="submit" name="submit" id="btn-ajout">Ajouter en ami.e</button>
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
                        <details>
                            <summary>Lire {{ $blog->title }}</summary>
                            <p>{{ $blog->content }}</p>
                        </details>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>

@endsection