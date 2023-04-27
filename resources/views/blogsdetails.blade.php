@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/js/style.js'])

@if($blog)
    <div class="blog">
        <p>{{$blog->title}}</p>
        <p>{{$blog->author}}</p>
        <p>{{$blog->content}}</p>
        <p>{{$blog->created_at}}</p>
    </div>
@else
    <p>Le blog que vous recherchez n'existe pas</p>
@endif

@endsection