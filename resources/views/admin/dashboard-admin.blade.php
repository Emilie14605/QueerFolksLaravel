@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/css/admin.css', 'resources/js/app.js'])

<section class="container">
    <div class="container-top">
        <h1>Menu administrateur</h1>
        <p>Ci-dessous vous pouvez administrer les publications et les utilisateurs</p>
    </div>
    <div class="container-bottom">
        <a href="{{ route('admin.posts') }}">Publications</a>
        <a href="{{ route('admin.user') }}">Utilisateurs</a>
    </div>
</section>

@endsection