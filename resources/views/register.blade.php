@extends('layouthf')

@section('content')
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
@endsection