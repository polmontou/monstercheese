@extends('layouts/app')
@section('page_title',$product_name)

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product_name}}</title>
</head>

<body>

@section('content')

    <main>
        {{var_dump($product[0]->name)}}
        <section>
            <h1>{{$product[0]->name}}</h1>
            <img src={{ asset($product[0]->picture) }} alt="Image {{$product[0]->name}}">
            <p>Prix au kg</p>
            <p>{{$product[0]->price}} €</p>
            <div>
                <p>Quantité</p>
                <button>AJouter au panier</button>
            </div>
            <p>{{$product[0]->description}}</p>
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
    </main>

</body>

</html>

@endsection

