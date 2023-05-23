@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])


<section class="container">
    <p>{{ $user->surname }}</p>
    {{ $user->id }}
</section>

@endsection