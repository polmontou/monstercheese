@extends('components.layout')

@section('page_title', 'Gestion')

@section('content')

<button><a href="{{ url("/backoffice/product/create") }}">Ajouter</a></button>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Poids</th>
            <th>Image</th>
            <th>Quantité en stock</th>
            <th>Catégorie</th>
            <th>Disponible</th>
        </tr>
    </thead>
@foreach ($products as $product)
    <tbody>
        <tr>
            <td><a href="{{ url("/backoffice/product/$product->id/edit") }}">{{$product->id}}</a></td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->weight}}</td>
            <td>{{$product->picture}}</td>
            <td>{{$product->stock_quantity}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->available}}</td>
            <td><button><a href="{{url("/backoffice/product/$product->id/edit")}}">Modifier</a></button></td>
            <td><form action="{{ route('product.delete', $product->id) }}" method="POST" onsubmit="return confirm('Supprimer ce produit ?')">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
            </form>
            </td>
        </tr>
    </tbody>
@endforeach
</table>
@endsection