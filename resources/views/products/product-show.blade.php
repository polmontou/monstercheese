@extends('components.layout')


@section('page_title', $product->name)


@section('content')
    <main>
        <section>
            <h1>{{$product->name}}</h1>
            <img src={{ asset($product->picture) }} alt="Image Fromage">
            <p>Prix : {{number_format($product->price, 2, ",", " ")}}€ TTC</p>
            <div>
                <p>Quantité</p>
                <button>AJouter au panier</button>
            </div>
            <p>{{$product->description}}</p>
            <div>
                <div>
                    <h1>Ingrédients</h1>
                    <ul>
                        <li>ingrédient 1</li>
                        <li>ingrédient 2</li>
                        <li>ingrédient 3</li>
                    </ul>
                </div>
                <div>
                    <h1>Monstre</h1>
                    <ul>
                        <li>ingrédient 1</li>
                        <li>ingrédient 2</li>
                        <li>ingrédient 3</li>
                    </ul>
                </div>
                <div>
                    <h1>Livraison</h1>
                    <ul>
                        <li>ingrédient 1</li>
                        <li>ingrédient 2</li>
                        <li>ingrédient 3</li>
                    </ul>
                </div>
            </div>
        </section>
        <section>

            <x-customer-review/>
            <form>
                <textarea></textarea>
                <button>S'abonner</button>
            </form>
        </section>
@endsection
