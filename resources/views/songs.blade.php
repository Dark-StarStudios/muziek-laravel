<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
</head>
<body>
    <h1>Muziekbibliotheek songs pagina.</h1>
    <header>
        <nav style="display: flex; justify-content: space-around;">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('library') }}">Bibliotheek</a>
            <a href="{{ route('songs') }}">Liedjes</a>
        </nav>
    </header>
</body>
</html>