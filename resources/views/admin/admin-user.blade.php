@extends('layouts.layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/css/admin-user.css', 'resources/js/app.js'])

<section class="container">
    <h1>Menu des utilisateurs</h1>
    <div class="container-content">
        @foreach($users as $user)
            <div class="container-content-user bar">
                <p>{{$user->surname}}</p>
            </div>
            <div class="container-content-options">
                <a href="{{ route('admin.userupdate', ['id' => $user->id]) }}">Modifer</a>
                <form action="{{ route('admin.userdel', ['id' => $user->id]) }}" method="post">
                @csrf
                @method('delete')
                    <button type="submit" class="btn-danger">Supprimer</button>
                </form>
            </div>
        @endforeach
    </div>
</section>

@endsection