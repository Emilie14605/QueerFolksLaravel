@extends('layouthf')

@section('content')

<div class="blogs">
    <p>{{$blog->title}}</p>
    <p>{{$blog->author}}</p>
    <p>{{$blog->content}}</p>
    <p>{{$blog->created_at}}</p>
</div>

@endsection