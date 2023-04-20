@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
    <a href="{{ route('login') }}">Click</a>
    <div class="container messageaccueil">
        <h1>Queer&Folks</h1>
        <p>Bienvenue sur Queer&folks, un site de rencontre spécialement fait pour les membres de la communauté LGBTQUIA+, ici vous pourrez trouver des personnes recherchant la même chose que vous, que ça soit une rencontre d'un soir, plus longue ou simplement une amitié</p>
        <p>Pour accéder au site, vous pouvez vous créer un compte <a href="{{ route('login') }}">ici</a></p>
    </div>
@endsection