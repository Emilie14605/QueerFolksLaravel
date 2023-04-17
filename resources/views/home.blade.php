@extends('layouthf')

@section('content')
    <div class="container messageaccueil">
        <h1>Queer&Folks</h1>
        <p>Bienvenue sur Queer&folks, un site de rencontre spécialement fait pour les membres de la communauté LGBTQUIA+, ici vous pourrez trouver des personnes recherchant la même chose que vous, que ça soit une rencontre d'un soir, plus longue ou simplement une amitié</p>
        <p>Pour accéder au site, vous pouvez vous créer un compte <a href="{{ route('register') }}">ici</a></p>
        <p>Si vous êtes déjà membre, connectez vous <a href="{{ route('login') }}">ici</a></p>
    </div>
@endsection