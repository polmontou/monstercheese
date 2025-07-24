<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Croûte et Créature</h1>
        <nav>
            <a href="{{ routes('../homepage') }}">Accueil</a>
            <a href="{{ routes('../catalog') }}">Nos produits</a>
        </nav>
    </header>
</body>
</html>