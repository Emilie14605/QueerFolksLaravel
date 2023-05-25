@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/blogs.css'])


<section class="container">

    <h1>Nouveau blog</h1>

    @if (session('success'))
    <div class="alert alert-info" style="color: #4CAF50">
        {{ session('success') }}
    </div>
    @endif
    
    <form action="{{ route('blog.add') }}" method="post" id="blogs_form" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <input type="text" name="title" id="title" placeholder="Titre">
        <input type="file" name="picture" id="picture">
        <textarea name="content" id="content" placeholder="Contenu du blog" cols="75" rows="5"></textarea>
        <button type="submit" name="submit">Publier</button>
    </form>

</section>

@endsection