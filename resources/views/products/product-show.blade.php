@extends('components.layout')


@section('page_title', $page_title)


@section('content')
    <main>
        <section>
            <h1>{{$product[0]->name}}</h1>
            <img src={{ asset("$product[0]->picture") }} alt="Image Fromage">
            <p>{{ $product[0]->price}} €</p>
            <div>
                <p> {{ $product[0]->stock_quantity }} </p>
                <button>AJouter au panier</button>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra maximus augue. Vivamus venenatis odio quis ligula consequat, et imperdiet nisl dignissim. Donec eu orci aliquet, hendrerit metus ac, imperdiet nulla. Vivamus venenatis odio quis ligula consequat, et imperdiet nisl dignissim. Donec eu orci aliquet, hendrerit metus ac, imperdiet nulla. </p>
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
