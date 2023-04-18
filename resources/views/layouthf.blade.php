<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <base href="http://localhost/folks/index.php">
    <title>Queer&Folks</title>
</head>

<body>
    <header>
        <label for="icone-nav"><img src="{{ asset('images/menu-burger.svg') }}" class="icone-burger" alt="icone menu burger"></label>
        <input type="checkbox" id="icone-nav" class="check-menu">
        <nav class="menu-nav">
            <a href="{{ route('index') }}" id="lienacc">Accueil</a>
            <a href="{{ route('profile') }}" id="lienpro">Profil</a>
            <a href="{{ route('blogs') }}" id="lienblo">Blogs</a>
            <a href="{{ route('messages') }}" id="lienmes">Messages</a>
            <a href="{{ route('search') }}" id="liesrec">Recherche</a>
            <a href="{{ route('parameters') }}" id="lienpar">Paramètres</a>
            <a href="{{ route('contact') }}" id="liennou">Nous contacter</a>
        </nav>
        <img src="{{ asset('images/logo.svg') }}" alt="icone logo" class="icone-logo">
        <img src="{{ asset('images/user.svg') }}" alt="icone compte" class="icone-user">
    </header>
    @yield('content')
    <footer>
        <ul>
            <li><a href="https://www.patreon.com/user?u=91373358">Nous soutenir</a></li>
            <li><a href="front/pages/contact.php">Contact</a></li>
            <li><a href="">Mention légales</a></li>
            <li><a href="{{ route('apropos') }}">A propos</a></li>
        </ul>
    </footer>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

</html>