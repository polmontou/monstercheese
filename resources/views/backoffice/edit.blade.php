@extends('components.layout')

@section('page_title', 'Gestion')

@section('content')

<form action="{{ route('product.update', $product->id ) }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="name">Nom: </label>
    <input type="text" id="name" name='name' value="{{ $product->name }}">

    <label for="description">Description </label>
    <textarea id="description" name="description">{{ $product->description }}</textarea>

    <label for="price">Prix: </label>
    <input type="text" id="price" name="price" value="{{ $product->price }}"></input>

    <label for="weight">Poids: </label>
    <input type="text" id="weight" name="weight" value="{{ $product->weight }}">

    <label for="picture">Image: </label>
    <input type="file" name="picture" accept="image/">

    <label for="stock_quantity">Quantité disponible: </label>
    <input type="number" id="stock_quantity" name="stock_quantity" min="0" max="100" value="{{ $product->stock_quantity }}">

    <label for="category">Catégorie: </label>
    <input type="text" id="category" name="category" value="{{ $product->category }}">

    <label for="available">Disponible: </label>
    <input type="hidden" name=available" value="0">
    <input type="checkbox" id="available" name="available" value="1" {{ $product->available ? 'checked' : '' }}>


    <button type="submit">Envoyer</button>
</form>

@endsection