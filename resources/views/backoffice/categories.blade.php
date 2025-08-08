@extends('components/layout')
@section('page_title','Admin categories')

<main>
    @section('content')
    <section>
        <h1>Catégories de produits</h1>

        @foreach($categories as $categorie)
        <h3>{{ $categorie->name }}</h3>
        <ul>
            @foreach($categorie->products as $product)
            <li class="listUser">{{ $product->name }}</li>
            @endforeach
        </ul>
        @endforeach

    </section>
    @endsection

</main>