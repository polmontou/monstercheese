@extends('components.layout')

@section('page_title', 'Catalogue')

@section('content')
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
@endsection