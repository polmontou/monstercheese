@extends('components.layout')

@section('page_title', 'Gestion')

@section('content')

<main>
    <h1>Nom: {{$product[0]->name}}</h1>
    <img src="{{ asset("$product[0]->picture") }}" alt="{{$product[0]->name}}">
    <p>Description: {{$product[0]->description}}</p>
    <p>Prix: {{$product[0]->price}} €</p>
    <p>Poids: {{$product[0]->weight}} grammes</p>
    <p>Quantité en stock: {{$product[0]->stock_quantity}}</p>
    <p>Catégorie: {{$product[0]->category}}</p>
    <p>Disponible: {{$product[0]->available}}</p>

    <a href="{{ url("/backoffice/product/$product->id/edit") }} ">Modifier</a>
    <button>Supprimer</button>
</main>

@endsection