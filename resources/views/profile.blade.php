@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/profil.css'])

<h1>{{ $user->surname }}</h1>

<section class="container">

    <div class="profile-picture">
        <img src="{{ asset('images/' . $user->id . '/' . $user->picture) }}" alt="photo de profil">
    </div>
    <div class="informations">

        <a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}">Configurer le profil</a>

        <h2>Sexualité :</h2>
        {{ $user->sexualorientation }}

        <h2>Orientation Romantique :</h2>
        {{ $romanticOrientation }}

        <h2>Genre :</h2>
        {{ $user->gender }}

        @if(Auth::id() != $user->id)
        <form action="{{ route('friendrequest.send') }}" method="post">
            @method('POST')
            @csrf
            <input type="hidden" name="receiver_id" value="{{ $user->id }}">
            <button type="submit" name="submit">Demander en ami.e</button>
        </form>
        <br>
        <!-- <a href="{{ route('messages', ['user_id' => $user->id]) }}">Envoyer un message</a> -->
        @endif
    </div>

    <div class="description">
        <h2>A propos de moi</h2>
        <p>{{ $user->description }}</p>
    </div>

    <div class="blogs">
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