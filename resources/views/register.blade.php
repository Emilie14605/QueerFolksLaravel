<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <footer>
        <ul>
            <li><a href="">Nous soutenir</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Mention légales</a></li>
            <li><a href="">A propos</a></li>
        </ul>
    </footer>
    <script type="text/javascript" src="../assets/js/scriptfront.js"></script>
</body>

</html>