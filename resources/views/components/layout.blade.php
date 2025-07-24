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
    </header>

    @yield('content')

    <footer>
        <div class="footer__contact">
            <h4 class="footer__contact--title">CONTACT</h4>
            <div class="footer__contact--phone">06.66.66.66.63</div>
            <div class="footer__contact--mail">contact@c&c.com</div>
        </div>
        <img src={{ asset('images/logo.png') }} alt="Logo Croûte & Créatures" class="footer__logo">
    </footer>
</body>    