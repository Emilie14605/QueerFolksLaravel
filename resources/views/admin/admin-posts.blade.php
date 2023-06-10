@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/css/admin-post.css', 'resources/js/app.js'])

<section class="container">
    <h1>Menu des publications</h1>

    <div class="container-content">
        @foreach($posts as $post)
            <div class="container-content-post">
                <p>{{$post->title}}</p>
            </div>
            <div class="container-content-options">
                <a href="{{ route('admin.postupdate', ['id' => $post->id]) }}">Modifer</a>
                <form action="{{ route('admin.postsdel', ['id' => $post->id]) }}" method="post" class="container-content-form">
                @csrf
                @method('delete')
                    <button type="submit" class="btn">Supprimer</button>
                </form>
            </div>
        @endforeach
    </div>

</section>

@endsection