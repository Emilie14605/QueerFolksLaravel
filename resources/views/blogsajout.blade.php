@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/js/style.js'])
@vite(['resources/css/blogs.css'])

<section class="container">
    <h1>Formulaire d'ajout de blogs</h1>
    <form action="{{ route('blogs.ajout') }}" method="post" name="blogs-form" id="blogs-form" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <label for="title">Titre</label>
        <input type="text" name="title" id="title">
        <label for="picture">Photo</label>
        <input type="file" name="picture" id="picture">
        <label for="content">Contenu</label>
        <textarea name="content" id="content"></textarea>
        <button type="submit" name="submit">Publier</button>
    </form>

</section>

@endsection