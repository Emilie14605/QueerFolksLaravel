@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/js/style.js'])
@vite(['resources/css/blogs.css'])

<section class="container">
    <h1>{{$post->title}}</h1>
    @if($post)
    <div class="blog-detail">
        <h3>Auteur.e : {{$post->author}}</h3>
        <i>{{$post->created_at}}</i>
        <img src="{{ asset('images/publications/' . $post->post_user_id . '/' . $post->picture) }}" alt="Photo du blog">
        <p>{{$post->content}}</p>
    </div>
    @else
    <p>La publication que vous recherchez n'existe pas</p>
    @endif
</section>

@endsection