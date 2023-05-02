@extends('layouthf')

@section('content')

@vite(['resources/css/style.css', 'resources/js/app.js'])
@vite(['resources/js/style.js'])

<section class="container">

<form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
    <button type="submit">Enregistrer</button>
</form>

</section>

@endsection