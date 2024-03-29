<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/stylefront.css" />
    <link rel="stylesheet" href="../assets/css/loginfront.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Connexion/Inscription</title>
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
    <div class="container-form container">
        <form action="" method="post" name="form-register" class="form-register">
            <label for="registername">Nom :</label>
            <input type="text" name="registername" id="registernname">
            <label for="login">Prénom :</label>
            <input type="text" name="login" id="login">
            <label for="registeremail">Email :</label>
            <input type="text" name="registeremail" id="registeremail">
            <label for="registerpassword">Mot de passe :</label>
            <input type="text" name="registerpassword" id="registerpassword">
            <label for="registerpasswordr">Répéter votre mot de passe</label>
            <input type="text" name="registerpasswordr" id="registerpasswordr">
            <button type="reset" name="reset">Annuler</button>
            <button type="submit" name="submit">Valider</button>
            <button type="button" class="btn-registerform">Déjà membre ? Connectez vous</button>
        </form>
        <form action="" method="post" name="form-login" class="form-login">
            <label for="loginemail">Email :</label>
            <input type="text" name="loginemail" id="loginemail">
            <label for="loginpassword">Mot de passe :</label>
            <input type="text" name="loginpassword" id="loginpassword">
            <button type="reset">Annuler</button>
            <button type="submit">Valider</button>
            <button type="button" class="btn-loginform">Vous n'êtes pas membre ? Inscrivez vous</button>
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
    <script type="text/javascript" src="../assets/js/scriptfront.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

</html>