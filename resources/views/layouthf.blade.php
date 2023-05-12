<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <base href="http://localhost/folks/index.php">
    <title>Queer&Folks</title>
</head>

<body>
    <header>
        <img src="{{ asset('images/menu-burger.svg') }}" alt="menu burger" class="icone" id="burger">
        <a href="{{ route('index') }}" class="liens">Accueil</a>
        @if(Auth::check())
            <a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}" class="liens">Profil</a>
        @endif
        <a href="{{ route('publications') }}" class="liens">Publications</a>
        <a href="{{ route('messages') }}" class="liens">Messages</a>
        <a href="{{ route('index') }}"><img src="{{ asset('images/logo.svg') }}" alt="Logo" class="icone" id="logo"></a>
        <a href="{{ route('utlisateurs') }}" class="liens">Page des profils</a>
        <a href="{{ route('notif') }}" class="liens">Demandes d'amies</a>
        <a href="{{ route('contact') }}" class="liens">Me contacter</a>
        <img src="{{ asset('images/user.svg') }}" alt="Compte" class="icone" id="compte">
    </header>

    <nav class="menu-nav" id="menu">
        <ul>
            <li><a href="{{ route('index') }}">Accueil</a></li>
            @if(Auth::check())
            <li><a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}">Profil</a></li>
            @endif
            <li><a href="{{ route('publications') }}">Publications</a></li>
            <li><a href="{{ route('messages') }}">Messages</a></li>
            <li><a href="{{ route('utlisateurs') }}">Page des profils</a></li>
            <li><a href="{{ route('notif') }}">Demandes d'amies</a></li>
            <li><a href="{{ route('contact') }}">Me contacter</a></li>
        </ul>
    </nav>

    @if(Auth::guest())
    <div id="popup" class="popup">
        <ul class="popup-content">
            <span class="close">&times;</span>
            <li><a href="{{ route('register') }}">S'inscrire</a></li>
            <li><a href="{{ route('login') }}">Se connecter</a></li>
        </ul>
    </div>
    @endif

    @if(Auth::check())
    <div id="popup" class="popup">
        <ul class="popup-content">
            <span class="close">&times;</span>
            <li><a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}">Profil</a></li>
            <li><a href="{{ route('profile.edit') }}">Paramètres</a></li>
            <li>
                <a href="{{ route('logout') }}">Se déconnecter</a>
            </li>
        </ul>
    </div>
    @endif

    @yield('content')
    <footer>
        <ul>
            <li><a href="https://www.patreon.com/user?u=91373358">Me soutenir</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('contact') }}">Mention légales</a></li>
            <li><a href="{{ route('apropos') }}">A propos</a></li>
        </ul>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>