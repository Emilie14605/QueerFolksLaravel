@extends('layouthf')

@section('content')
<a href="{{ route('login') }}">Click</a>
<div class="param">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name">
        <label for="email">Email :</label>
        <input type="text" name="email" id="email">
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password">
        <label for="passwordr">Répéter votre mot de passe</label>
        <input type="password" name="passwordr" id="passwordr">
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" id="firstname">
        <label for="surname">Pseudo</label>
        <input type="text" name="surname" id="surname">
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
        <label for="picture">Photo de profil</label>
        <input type="file" name="picture" id="picture">
        <select name="gender" id="gender">
            <option value="">Sélectionnez un genre</option>
            <option value="Homme Cisgenre" {{ old('gender') === 'Homme Cisgenre' ? 'selected' : '' }}>Homme Cisgenre</option>
            <option value="Femme Cisgenre" {{ old('gender') === 'Femme Cisgenre' ? 'selected' : '' }}>Femme Cisgenre</option>
            <option value="Homme Transgenre" {{ old('gender') === 'Homme Transgenre' ? 'selected' : '' }}>Homme Transgenre</option>
            <option value="Femme Transgenre" {{ old('gender') === 'Femme Transgenre' ? 'selected' : '' }}>Femme Transgenre</option>
            <option value="Genderfluid" {{ old('gender') === 'Genderfluid' ? 'selected' : '' }}>Genderfluid</option>
            <option value="Genderqueer" {{ old('gender') === 'Genderqueer' ? 'selected' : '' }}>Genderqueer</option>
            <option value="Agenre" {{ old('gender') === 'Agenre' ? 'selected' : '' }}>Agenre</option>
        </select>
        <select name="sexualorientation" id="sexualorientation">
            <option value="">Sélectionnez une orientation sexuelle</option>
            <option value="Homosexuelle" {{ old('sexualorientation') === 'Homosexuelle' ? 'selected' : '' }}>Homosexuelle</option>
            <option value="Bisexuelle" {{ old('sexualorientation') === 'Bisexuelle' ? 'selected' : '' }}>Bisexuelle</option>
            <option value="Pansexuelle" {{ old('sexualorientation') === 'Pansexuelle' ? 'selected' : '' }}>Pansexuelle</option>
            <option value="Demi-sexuelle" {{ old('sexualorientation') === 'Demi-sexuelle' ? 'selected' : '' }}>Demi-sexuelle</option>
            <option value="Asexuelle" {{ old('sexualorientation') === 'Asexuelle' ? 'selected' : '' }}>Asexuelle</option>
            <option value="Heteroxuelle" {{ old('sexualorientation') === 'Heteroxuelle' ? 'selected' : '' }}>Heteroxuelle</option>
        </select>
        <select name="romanticorientation" id="romanticorientation">
            <option value="">Sélectionnez une orientation romantique</option>
            <option value="Homoromantique" {{ old('romanticorientation') === 'Homoromantique' ? 'selected' : '' }}>Homoromantique</option>
            <option value="Biromantique" {{ old('romanticorientation') === 'Biromantique' ? 'selected' : '' }}>Biromantique</option>
            <option value="Panromantique" {{ old('romanticorientation') === 'Panromantique' ? 'selected' : '' }}>Panromantique</option>
            <option value="Demi-romantique" {{ old('romanticorientation') === 'Demi-romantique' ? 'selected' : '' }}>Demi-romantique</option>
            <option value="Aromantique" {{ old('romanticorientation') === 'Aromantique' ? 'selected' : '' }}>Aromantique</option>
            <option value="Heteroromantique" {{ old('romanticorientation') === 'Heteroromantique' ? 'selected' : '' }}>Heteroromantique</option>
        </select>
        <select name="lookingfor" id="lookingfor">
            <option value="">Sélectionnez une orientation romantique</option>
            <option value="Relation Amicale" {{ old('lookingfor') === 'Relation Amicale' ? 'selected' : '' }}>Relation Amicale</option>
            <option value="Relation Romantique" {{ old('lookingfor') === 'Relation Romantique' ? 'selected' : '' }}>Relation Romantique</option>
            <option value="Relation Sexuelle" {{ old('lookingfor') === 'Relation Sexuelle' ? 'selected' : '' }}>Relation Sexuelle</option>
        </select>
        <button type="reset" name="reset">Annuler</button>
        <a href="{{ route('register') }}">Déjà membre ? Connectez vous</a>
        <button type="submit">Enregistrer les modifications</button>
    </form>
    <form action="{{ route('profile.destroy') }}" method="post">
        @method('DELETE')
        @csrf
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
            @error('password')
            <div class="invalid">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Supprimer le Compte</button>
    </form>
</div>
@endsection