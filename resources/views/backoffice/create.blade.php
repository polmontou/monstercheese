@extends('components.layout')

@section('page_title', 'Ajout')

@section('content')
<main class="productCreator__main">

    <h1>Ajout d'un produit</h1>
    <form action="{{ url("/backoffice/product/new") }}" method="POST">
        @csrf
        @method('put')
        <div class="productCreator__form__input">
            <label for="name" class="">Nom :</label>
            <input type="text" class="form-control" name="name" id="name">
            
        </div>
        <div class="productCreator__form__input">
            <label for="description" class="">Description :</label>
            <textarea class="form-control" name="description" id="description" rows="4" cols="50"></textarea>

        </div>
        <div class="productCreator__form__input">
            <label for="price" class="">Prix (en €):</label>
            <input type="number" class="form-control" name="price" id="price" min ="0" max="500000">
        </div>
        <div class="productCreator__form__input">
            <label for="weight" class="">Poids (en kg) :</label>
            <input type="number" class="form-control" name="weight" id="weight" min ="0" max="500000">
        </div>
        <div class="productCreator__form__input">
            <label for="picture" class="">Image :</label>
            <input type="text" class="form-control" name="picture" id="picture" min ="0" max="500000">
        </div>
        <div class="productCreator__form__input">
            <label for="stock_quantity" class="">Quantité en stock :</label>
            <input type="number" class="form-control" name="stock_quantity" id="stock_quantity" min ="0" max="500000">
        </div>
        <div class="productCreator__form__input">
            <label for="category_id" class="">Catégorie :</label>
            <input type="number" class="form-control" name="category_id" id="category_id" min ="1" max="5">
        </div>
        <div class="productCreator__form__input">
            <p>Disponible :</p>
            <input type="radio" id="non-available" name="available" value="0">
            <label for="non-available">Non</label>
            <input type="radio" id="available" name="available" value="1">
            <label for="available">Oui</label>
        </div>
        <div class="productCreator__form__input">
            <input type="submit" name="update_delete" value="Créer le produit">
        </div>

        @if ($errors->any())
        <div class="error__displayer">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
        @endif

    </form>
</main>
@endsection