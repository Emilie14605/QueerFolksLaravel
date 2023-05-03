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
        <img src="{{ asset('images/menu-burger.svg') }}" alt="menu burger" class="icone-burger" id="burger">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="icone-logo">
        <img src="{{ asset('images/user.svg') }}" alt="Compte" class="icone-user">
        <nav class="menu-nav" id="menu">
            <ul>
                <li><a href="{{ route('index') }}">Accueil</a></li>
                @if(Auth::check())
                <li><a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}">Profil</a></li>
                @endif
                <li><a href="{{ route('blogs') }}">Blogs</a></li>
                <li><a href="{{ route('messages') }}">Messages</a></li>
                <li><a href="{{ route('search') }}">Page des profils</a></li>
                <li><a href="{{ route('profile.edit') }}">Paramètres</a></li>
                <li><a href="{{ route('contact') }}">Me contacter</a></li>
                <li><a href="{{ route('notify') }}">Notifications</a></li>
            </ul>
        </nav>
    </header>
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