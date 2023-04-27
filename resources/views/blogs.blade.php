@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/js/style.js'])

    <a href="{{ route('login') }}">Click</a>
    <div class="container messageaccueil">
        <h1>Queer&Folks</h1>
        <p>Bienvenue sur Queer&folks, un site de rencontre spécialement fait pour les membres de la communauté LGBTQUIA+, ici vous pourrez trouver des personnes recherchant la même chose que vous, que ça soit une rencontre d'un soir, plus longue ou simplement une amitié</p>
        <p>Pour accéder au site, vous pouvez vous créer un compte <a href="{{ route('login') }}">ici</a></p>
    </div>
    @if(Auth::user()->isAdmin)
    <a href="{{ route('blogsajoutform') }}">Ajouter un Blog</a>
    @endif
        @foreach($blogs as $blog)
        <div class="blogs">
            <p>{{$blog->title}}</p>
            <p>{{$blog->author}}</p>
            <p>{{$blog->content}}</p>
            <a href="{{ route('blogsdetails', ['id' => $blog->id]) }}">Détails</a>
        </div>
        @endforeach
@endsection