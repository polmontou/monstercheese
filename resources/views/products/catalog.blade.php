@extends('components.layout')

@section('page_title', 'Catalogue')

@section('content')
    <main>
        <h1>Nos produits</h1>
        @if(session('updated'))
        <div class="alert alert-success">
            {{ session('updated') }}
        </div>
        @endif
        <div class="catalogFeed">
            @foreach ($products as $product)  
                <div class="catalogFeed__itemCard">
                    <img src={{ asset("$product->picture") }} alt="Cheese pic" class="catalogFeed_itemCard__img" width="300rem">
                    <h2 class="catalogFeed__itemCard__name">{{$product->name}}</h2> 
                    <div class="catalogFeed__itemCard__price">{{number_format($product->price, 2, ",", " ")}}€ TTC</div>
                    <div class="catalogFeed__itemCard__weight">{{number_format($product->weight/1000, 2, ",", " ")}} kg</div>
                    <div class="catalogFeed__itemCard__opinion">526 avis</div>
                    <a href={{ url("/product/$product->id") }}><button class="catalogFeed__itemCard__detailProduct">+ d'infos</button></a>                   
                    <form action="{{ url('/cart/add-to-cart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_order" value={{$product->id}}>
                        <div>
                            <label for="order_quantity" style="color: #999999">Quantité :</label>
                            <input type="number" id="order_quantity" name="order_quantity" min="1" max={{ $product->stock_quantity }} value={{ $product->order_quantity }}>
                        </div>
                        <button type="submit" class="catalogFeed__itemCard__addToCart">Ajouter au panier</button>
                    </form>
                </div>
            @endforeach
        </div>
@endsection