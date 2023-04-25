@extends('layouthf')

@section('content')
@vite(['resources/css/style.css', 'resources/js/app.js'])

<h1>{{ $user->name }} {{ $user->firstname }} </h1>
<p>{{ $user->description }}</p>

<h2>Sexualité :</h2>
{{ $user->sexualorientation }}

<h2>Orientation Romantique :</h2>
{{ $user->romanticorientation }}

<h2>Genre :</h2>
{{ $user->gender }}

@if(Auth::id() != $user->id)
<form action="{{ route('friendrequest.send') }}" method="post">
    @method('POST')
    @csrf
    <input type="hidden" name="sender_id" value="{{ Auth::id() }}">
    <input type="hidden" name="receiver_id" value="{{ $user->id }}">
    <input type="hidden" name="status" value="en attente">
    <button type="submit" name="submit">Demander en ami.e</button>
</form>
@endif

<form action="{{ route('logout') }}" method="POST">
    @method('POST')
    @csrf
    <button type="submit" name="btn-logout">Se déconnecter</button>
</form>

<h2>Publications</h2>
@endsection