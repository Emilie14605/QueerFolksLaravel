@extends('layouthf')

@section('content')

<form action="" method="post" name="blogs-form">
    @method('POST')
    @csrf
    <label for="title">Titre</label>
    <input type="text" name="title" id="title">
    <label for="content">Contenu</label>
    <textarea name="content" id="content"></textarea>
    <button type="submit" name="submit">Publier</button>
</form>

@endsection