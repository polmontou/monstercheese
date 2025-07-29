@extends('components/backend')
@section('page_title','Admin Products')

@section('content')
<main>
   <h1>Page d'administration des produits</h1>

        <table>
        <thead>
            <tr>
            <th>id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Weight</th>
            <th>Picture</th>
            <th>Stock available</th>
            <th>Category</th>
            <th>Available</th>
            <th>Select</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->weight}}</td>
            <td>{{$product->picture}}</td>
            <td>{{$product->stock}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->available}}</td>
            <td><a href='{{url("/backoffice/product/{$product->id}")}}'>Acces</a>
            </tr>
            @endforeach  
        </tbody>
        </table>
</main>


@endsection
