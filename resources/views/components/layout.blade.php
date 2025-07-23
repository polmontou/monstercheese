<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    {{-- @vite(['resources/css/app.css']) --}}
</head>
<body>
    <header>
        <img src={{ asset('images/logo.png') }} alt="Logo Croûte & Créatures" width="300rem">
        <a href=""></a>
    </header>

    @yield('content')

    <footer>
        <div class="footer__contact">
            <h4 class="footer__contact--title">CONTACT</h4>
            <div class="footer__contact--phone">Tél: 06.66.66.66.63</div>
            <div class="footer__contact--mail">Mail: contact@croute&creatures.com</div>
        </div>
        <img src={{ asset('images/logo.png') }} alt="Logo Croûte & Créatures" class="footer__logo" width="200rem">
    </footer>
</body>    