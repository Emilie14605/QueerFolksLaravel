@extends('layouthf')

@section('content')
    <div class="container-form container">
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
@endsection