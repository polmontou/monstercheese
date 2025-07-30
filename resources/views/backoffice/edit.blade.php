@extends('components.layout')

@section('page_title', 'Modification de produit')

@section('content')
<main class="productEditor__main">

    <h1>Modification de produit</h1>
    <form action="{{ url("/backoffice/product/$product->id/edited") }}" method="POST">
        @csrf
        @method('post')
        <input type="hidden" name="id" value={{ $product->id }}>
        <div class="productEditor__form__input">
            <label for="name" class="">Nom :</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
            
        </div>
        <div class="productEditor__form__input">
            <label for="description" class="">Description :</label>
            <textarea class="form-control" name="description" id="description" rows="4" cols="50">{{ $product->description }}</textarea>

        </div>
        <div class="productEditor__form__input">
            <label for="price" class="">Prix (en €):</label>
            <input type="number" class="form-control" name="price" id="price" min ="0" max="500000" value="{{ $product->price }}">
        </div>
        <div class="productEditor__form__input">
            <label for="weight" class="">Poids (en kg) :</label>
            <input type="number" class="form-control" name="weight" id="weight" min ="0" max="500000" value="{{ $product->weight }}">
        </div>
        <div class="productEditor__form__input">
            <label for="picture" class="">Image :</label>
            <input type="text" class="form-control" name="picture" id="picture" min ="0" max="500000" value="{{ $product->picture }}">
        </div>
        <div class="productEditor__form__input">
            <label for="stock_quantity" class="">Quantité en stock :</label>
            <input type="number" class="form-control" name="stock_quantity" id="stock_quantity" min ="0" max="500000" value="{{ $product->stock_quantity }}">
        </div>
        <div class="productEditor__form__input">
            <label for="category_id" class="">Catégorie :</label>
            <input type="number" class="form-control" name="category_id" id="category_id" min ="1" max="5" value="{{ $product->category }}">
        </div>
        <div class="productEditor__form__input">
            <p>Disponible :</p>
            <input type="radio" id="non-available" name="available" checked="{{ $product->available == "0" ? "checked" : "" }}" value="0">
            <label for="non-available">Non</label>
            <input type="radio" id="available" name="available" checked="{{ $product->available == "1" ? "checked" : "" }}" value="1">
            <label for="available">Oui</label>
        </div>
        <div class="productEditor__form__input">
            <input type="submit" name="update_delete" value="Mettre à jour le produit">
        </div>
    </form>
    <form action={{ url("/backoffice/product/$product->id/deleted")}} method="POST">
        @csrf
        @method('delete')
            <button type="submit">Supprimer le produit</button>
    </form>
</main>
@endsection