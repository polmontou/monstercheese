@extends('components.layout')

@section('page_title', 'Catalogue')

@section('content')
    <main>
        <h1>Nos produits</h1>
        <div class="catalogFeed">
            @foreach ($products as $product)  
                <div class="catalogFeed__itemCard">
                    <img src={{ asset("$product->picture") }} alt="Cheese pic" class="catalogFeed_itemCard__img" width="300rem">
                    <h2 class="catalogFeed__itemCard__name">{{$product->name}}</h2> 
                    <div class="catalogFeed__itemCard__price">{{$product->price}}</div>
                    <div class="catalogFeed__itemCard__weight">{{$product->weight}}</div>
                    <div class="catalogFeed__itemCard__opinion">526 avis</div>
                    <a href={{ url("/product/$product->id") }}><button class="catalogFeed__itemCard__detailProduct">+ d'infos</button></a>
                    <button class="catalogFeed__itemCard__addToCart">Ajouter au panier</button>
                </div>
            @endforeach
        </div>
    </main>
@endsection