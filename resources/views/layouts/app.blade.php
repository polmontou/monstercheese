<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href={{ asset('images/favicon.png') }} type="image/png">
    <title>@yield('page_title')</title>
</head>

<body>
    <header>
        <img src={{ asset('images/logo.png') }} alt="Logo Croûte & Créatures" width="300rem">
        <a href="{{url('homepage')}}">Homepage</a>
        <a href="{{url('products')}}">Catalogue</a>
        <a href="">Product</a>

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