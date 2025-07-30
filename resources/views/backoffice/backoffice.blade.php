@extends('components.layout')

@section('page_title', 'Gestion')

@section('content')
<main class="backOffice__main">
    <h1>
        Vos produits en vente
    </h1>
        @if (session('updated'))

        <div class="alert alert-success">

            {{ session('updated') }}

        </div>
        @elseif (session('deleted'))
        <div class="alert alert-success">

            {{ session('deleted') }}

        </div>
        @elseif (session('added'))
        <div class="alert alert-success">

            {{ session('added') }}

        </div>
        @endif
    <div class="backOffice__main__button--newProduct">
        <button><a href="{{ url('/backoffice/product/new') }}">Ajouter un produit</a></button>
    </div>
    <table class = "main__TableProducts">
        <thead class = "main__TableProducts--header">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th style='width:33%'>Description</th>
                <th>Prix</th>
                <th>Poids</th>
                <th>Picture</th>
                <th>Quantité en stock</th>
                <th>Catégorie</th>
                <th>Disponible</th>
                <th width="10%">Que faire?</th>
            </tr>
        </thead>
    @foreach ($products as $product)
        <tbody class = "main__TableProducts--products">
            <tr>
                <td>{{$product->id}}</td>
                <td><a href={{ url("/backoffice/product/$product->id") }}>{{$product->name}}</a></td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->weight}}</td>
                <td>{{$product->picture}}</td>
                <td>{{$product->stock_quantity}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->available}}</td>
                <td class="main__TableProducts--links">
                    <button><a href="{{ url("/backoffice/product/$product->id") }} "><img src="{{asset('images/loupe.png')}}" alt="Show product's details"></a></button>
                    <button><a href="{{ url("/backoffice/product/$product->id/edit") }} "><img src="{{asset('images/editpicture.png')}}" alt="Edit product"></a></button>
                    <form action={{ url("/backoffice/product/$product->id/deleted")}} method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit"><img src="{{asset('images/waste.png')}}" alt="Delete product"></button>
                    </form>
                </td>
            </tr>
        </tbody>
    @endforeach

    </table>
    <div class="backOffice__main__button--newProduct">
        <button><a href="{{ url('/backoffice/product/new') }}">Ajouter un produit</a></button>
    </div>
    </main>
    @endsection
