<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link rel="icon" type="image/x-icon" href={{ asset('images/favicon.png') }}>
</head>
<body>
    @include('header')

    <main>
        <h1>Nos produits</h1>
        <div class="catalogFeed">
            <div class="catalogFeed__itemCard">
                <img src={{ asset('images/cheese.png') }} alt="Cheese pic" class="catalogFeed_itemCard__img" width="300rem">
                <h2 class="catalogFeed_itemCard__name">Trolleton affiné</h2> 
                <div class="catalogFeed_itemCard__priceWeight">52,00€/kg TTC</div>
                <div class="catalogFeed_itemCard__opinion">526 avis</div>
                <button class="catalogFeed_itemCard__addToCart">Ajouter au panier</button>
            </div>
            <hr>
            <div class="catalogFeed__itemCard">
                <img src={{ asset('images/cheese.png') }} alt="Cheese pic" class="catalogFeed_itemCard__img" width="300rem">
                <h2 class="catalogFeed_itemCard__name">Trolleton affiné</h2> 
                <div class="catalogFeed_itemCard__priceWeight">52,00€/kg TTC</div>
                <div class="catalogFeed_itemCard__opinion">526 avis</div>
                <button class="catalogFeed_itemCard__addToCart">Ajouter au panier</button>
            </div>
            <hr>
            <div class="catalogFeed__itemCard">
                <img src={{ asset('images/cheese.png') }} alt="Cheese pic" class="catalogFeed_itemCard__img" width="300rem">
                <h2 class="catalogFeed_itemCard__name">Trolleton affiné</h2> 
                <div class="catalogFeed_itemCard__priceWeight">52,00€/kg TTC</div>
                <div class="catalogFeed_itemCard__opinion">526 avis</div>
                <button class="catalogFeed_itemCard__addToCart">Ajouter au panier</button>
            </div>
            <hr>
        </div>

        @include('footer')
    </main>
</body>
</html>