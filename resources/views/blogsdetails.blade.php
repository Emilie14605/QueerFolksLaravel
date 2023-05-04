@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/js/style.js'])
@vite(['resources/css/blogs.css'])

<section class="container">
    <h1>{{$blog->title}}</h1>
    @if($blog)
    <div class="blog-detail">
        <p>{{$blog->author}}</p>
        <img src="{{ asset('images/blogs/' . Auth::user()->id . '/' . $blog->picture) }}" alt="Photo du blog">
        <p>{{$blog->content}}</p>
        <p>{{$blog->created_at}}</p>
    </div>
    @else
    <p>Le blog que vous recherchez n'existe pas</p>
    @endif
</section>

@endsection