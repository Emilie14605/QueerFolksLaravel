<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front/assets/css/stylefront.css">
    <link rel="stylesheet" href="front/assets/css/indexfront.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <base href="http://localhost/folks/index.php">
    <title>Queer&Folks</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('profile') }}">Profil</a></li>
                <li><a href="{{ route('blogs') }}">Blogs</a></li>
                <li><a href="{{ route('messages') }}">Messages</a></li>
                <li><a href="{{ route('search') }}">Recherche</a></li>
                <li><a href="{{ route('parameters') }}">Paramètres</a></li>
                <li><a href="{{ route('contact') }}">Nous contacter</a></li>
            </ul>
        </nav>
        <img src="front/assets/img/logo.jpeg" alt="Logo">
        <img src="front/icones/compte.svg" alt="Compte" class="icone-compte">
    </header>
    <div class="container messageaccueil">
        <h1>Queer&Folks</h1>
        <p>Bienvenue sur Queer&folks, un site de rencontre spécialement fait pour les membres de la communauté LGBTQUIA+, ici vous pourrez trouver des personnes recherchant la même chose que vous, que ça soit une rencontre d'un soir, plus longue ou simplement une amitié</p>
        <p>Pour accéder au site, vous pouvez vous créer un compte <a href="{{ route('login') }}">ici</a></p>
    </div>
    <footer>
        <ul>
            <li><a href="https://www.patreon.com/user?u=91373358">Nous soutenir</a></li>
            <li><a href="front/pages/contact.php">Contact</a></li>
            <li><a href="">Mention légales</a></li>
            <li><a href="front/pages/apropos.php">A propos</a></li>
        </ul>
    </footer>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

</html>