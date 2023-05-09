@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/js/style.js'])
@vite(['resources/css/blogs.css'])

<section class="container">
    @if(Auth::user()->isAdmin)
    <a href="{{ route('publications.form') }}">Faire une nouvelle publication</a>
    @endif
    @foreach($posts as $post)
    <div class="blogs">
        <h1>{{$post->title}}</h1>
        <h3>Auteur.e : {{$post->author}}</h3>
        <a href="{{ route('publications.details', ['id' => $post->id]) }}">Détails</a>
    </div>
    @endforeach
</section>
@endsection