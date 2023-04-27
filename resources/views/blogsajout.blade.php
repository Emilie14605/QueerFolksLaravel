@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/js/style.js'])

<form action="{{ route('blogs.ajout') }}" method="post" name="blogs-form">
    @method('POST')
    @csrf
    <label for="title">Titre</label>
    <input type="text" name="title" id="title">
    <label for="content">Contenu</label>
    <textarea name="content" id="content"></textarea>
    <button type="submit" name="submit">Publier</button>
</form>

@endsection