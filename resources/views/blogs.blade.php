@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/js/style.js'])
@vite(['resources/css/blogs.css'])

<section class="container">
    @if(Auth::user()->isAdmin)
    <a href="{{ route('blogsajoutform') }}">Ajouter un Blog</a>
    @endif
    @foreach($blogs as $blog)
    <div class="blogs">
        <p>{{$blog->title}}</p>
        <p>{{$blog->author}}</p>
        <p>{{$blog->content}}</p>
        <a href="{{ route('blogsdetails', ['id' => $blog->id]) }}">Détails</a>
    </div>
    @endforeach
</section>
@endsection