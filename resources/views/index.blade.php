@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/index.css'])

<section class="container">

    <h1>Queer&Folks</h1>
    
    <p>Bienvenue sur Queer&folks, un site de rencontre spécialement fait pour les membres de la communauté LGBTQIA+, ici vous pourrez trouver des personnes recherchant la même chose que vous, que ça soit une rencontre d'un soir, plus longue ou simplement une amitié</p>
    <p>Pour accéder au site, vous pouvez vous créer un compte <a href="{{ route('register') }}">ici</a></p>
    <p>Si vous êtes déjà membre, connectez vous <a href="{{ route('login') }}">ici</a></p>
    <img src="{{ asset('images/front-page-image.jpg') }}" alt="Coeur arc-en-ciel">

</section>

@endsection