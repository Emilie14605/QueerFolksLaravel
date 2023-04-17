@extends('layouthf')

@section('content')
<a href="{{ route('login') }}">Click</a>
<div class="param">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf

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