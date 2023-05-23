@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/css/publications.css'])

<section class="container">

    <h1>{{$post->title}}</h1>
    @if($post)
        <div class="publication-detail">
            <h3>Auteur.e : {{$post->author}}</h3>
            <i>{{$date}}</i>
            <img src="{{ asset('images/publications/' . $post->post_user_id . '/' . $post->picture) }}" alt="Photo de la publication">
            <p>{{$post->content}}</p>
        </div>
    @else
        <p>La publication que vous recherchez n'existe pas</p>
    @endif
    
</section>

@endsection