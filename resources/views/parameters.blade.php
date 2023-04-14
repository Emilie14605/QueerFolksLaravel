<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/stylefront.css">
    <link rel="stylesheet" href="../assets/css/parametersfront.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Paramètres</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../../index.php">Accueil</a></li>
                <li><a href="profile.php">Profil</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a href="messages.php">Messages</a></li>
                <li><a href="search.php">Recherche</a></li>
                <li><a href="parameters.php">Paramètres</a></li>
                <li><a href="contact.php">Nous contacter</a></li>
            </ul>
        </nav>
        <img src="" alt="Logo">
        <img src="../icones/compte.svg" alt="Compte" class="icone-compte">
    </header>
    <a href="front/pages/login.php">Click</a>
    <div class="param">
        <form action="" method="post" enctype="multipart/form-data">
        @csrf
        
            <button type="submit">Enregistrer les modifications</button>
        </form>
        <form action="{{ route('profile.destroy') }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">Supprimer le Compte</button>
        </form>
    </div>
    <footer>
        <ul>
            <li><a href="">Nous soutenir</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Mention légales</a></li>
            <li><a href="">A propos</a></li>
        </ul>
    </footer>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

</html>