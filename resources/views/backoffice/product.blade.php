@extends('components.layout')

@section('page_title', 'Gestion du site')

@section('content')
<main class="bOProduct__main">
    <h1>{{$product->name}}</h1>
    <img src="{{ asset($product->picture) }}" alt="{{$product->name}}" width="200rem">
    <table class="productTable__BO" >
        <tr>
            <th class= "productTable__BO--title">Description: </th><td width="80%" class= "productTable__BO--content">{{$product->description}}</td>
        </tr>
        <tr>
            <th class= "productTable__BO--title">Prix: </th><td class= "productTable__BO--content">{{$product->price}} €</td>
        </tr>
        <tr>
            <th class= "productTable__BO--title">Poids: </th><td class= "productTable__BO--content">{{$product->weight}} grammes</td>
        </tr>
        <tr>
            <th class= "productTable__BO--title">Quantité en stock: </th><td class= "productTable__BO--content">{{$product->stock_quantity}}</td>
        </tr>
        <tr>
            <th class= "productTable__BO--title">Catégorie: </th><td class= "productTable__BO--content">{{$product->category_id}}</td>
        </tr>
        <tr>
            <th class= "productTable__BO--title">Disponible: </th><td class= "productTable__BO--content">{{$product->available}}</td>    
        </tr>
    </table>
        <button>
        <a href="{{ url("/backoffice/product/$product->id/edit") }} ">Modifier</a>
    </button>    
    <form action={{ url("/backoffice/product/$product->id/deleted")}} method="POST">
        @csrf
        @method('delete')
        <button type="submit">Supprimer le produit</button>
    </form>
</main>    
@endsection