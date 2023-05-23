@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/publications.css'])

<section class="container">

    <h1>Nouvelle publication</h1>
    <form action="{{ route('publications.add') }}" method="post" name="publication-form" id="publication-form" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <input type="text" name="title" id="title" placeholder="Titre">
        <input type="file" name="picture" id="picture" placeholder="Photo">
        <textarea name="content" id="content" cols="75" rows="5" placeholder="Votre message"></textarea>
        <button type="submit" name="submit">Publier</button>
    </form>

</section>

@endsection