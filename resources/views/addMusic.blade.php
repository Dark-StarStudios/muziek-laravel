<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Muziekbibliotheek homepagina.</h1>
    <header>
        <nav style="display: flex; justify-content: space-around;">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('library') }}">Bibliotheek</a>
            <a href="{{ route('songs') }}">Liedjes</a>
        </nav>
    </header>
    <form action="{{ route('addmusic') }}" method="post">
        @csrf
        <input type="text" name="naam_music" placeholder="Naam">
        <input type="text" name="auteur" placeholder="Auteur">
        <input type="text" name="jaar" placeholder="Release jaar">
        <input type="submit" value="Versturen">
    </form>
    <!-- /resources/views/post/create.blade.php -->

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Create Post Form -->
    <!-- Cross-site request forgeries (CSRF) is a bescherming tegen aanvallen van niet-geautoriseerde websites. -->
</body>
</html>