
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href={{ asset('images/favicon.png') }}>
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href={{ asset('style.css') }}>
</head>
<body>
    <header>
        <a href={{ url("/") }}>
            <img src={{ asset('images/logo.png') }} alt="Logo Croûte & Créatures">
        </a>
        <nav>
            <a href="{{ url('/') }}">Voir le site</a>
            <a href="{{ url('/products') }}">Voir les produits sur le site</a>
        </nav>
    </header>

    @yield('content')


</body>    