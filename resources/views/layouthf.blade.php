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
        <img src="{{ asset('images/menu-burger.svg') }}" alt="menu burger" class="icone-burger" id="icone-burger" onclick="menu()">
        <a href="{{ route('index') }}"><img src="{{ asset('images/logo.svg') }}" alt="Logo" class="icone-logo"></a>
        <img src="{{ asset('images/user.svg') }}" alt="Compte" class="icone-user">
    </header>
    <nav class="menu-nav">
        <a href="{{ route('index') }}">Accueil</a>
        @if(Auth::check())
        <a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}">Profil</a>
        @endif
        <a href="{{ route('blogs') }}">Blogs</a>
        <a href="{{ route('messages') }}">Messages</a>
        <a href="{{ route('search') }}">Recherche</a>
        <a href="{{ route('parameters') }}">Paramètres</a>
        <a href="{{ route('contact') }}">Nous contacter</a>
        <a href="{{ route('notify') }}">Notifications</a>
    </nav>
    @yield('content')
    <footer>
        <ul>
            <li><a href="https://www.patreon.com/user?u=91373358">Nous soutenir</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('contact') }}">Mention légales</a></li>
            <li><a href="{{ route('apropos') }}">A propos</a></li>
        </ul>
    </footer>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>

</html>