@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/style.css', 'Resources/css/admin-post.css', 'resources/js/app.js'])

<section class="container-post">
    <form action="{{ route('admin.postSaveUpdate', ['id' => $post->id]) }}" method="post" name="publication-form" id="publication-form" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="text" name="title" id="title" placeholder="Titre" value="{{ old('title', $post->title) }}">
        <input type="file" name="picture" id="picture" placeholder="Photo" value="{{ old('picture', $post->picture) }}">
        <textarea name="content" id="content" cols="75" rows="5" placeholder="Votre message" value="{{ old('content', $post->content) }}"></textarea>
        <button type="submit" name="submit">Enregistrer les modifications</button>
    </form>
</section>

@endsection