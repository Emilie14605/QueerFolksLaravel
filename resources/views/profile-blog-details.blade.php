@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/profil.css'])

<section class="container">
    <h1>{{$blog->title}}</h1>
    @if($blog)
    <div class="blog-detail">
        <h3>Auteur.e : {{$blog->author}}</h3>
        <i>{{$blog->created_at}}</i>
        <img src="{{ asset('images/blogs/' . $blog->post_user_id . '/' . $blog->picture) }}" alt="Photo du blog">
        <p>{{$blog->content}}</p>
    </div>
    @else
    <p>La publication que vous recherchez n'existe pas</p>
    @endif
</section>

@endsection