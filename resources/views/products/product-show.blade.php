@extends('components/layout')
@section('page_title',$product[0]->name)

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product[0]->name}}</title>
</head>


@section('content')
<main>
    <!--     <pre>{{var_dump($product)}}</pre>
 -->
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
        <x-customer-review />
        <form>
            <textarea></textarea>
            <button>S'abonner</button>
        </form>
    </section>
    <section>
        <h2>Nos autres produits</h2>
        <button onclick="displayProducts()">All product</button>
        <button onclick="displayProductsOrderAlpha()">Products Alphabetically</button>
        <button onclick="displayProductsOrderPrice()">Products Price</button>



    </section>
    <section id="allProducts" class="hidden">
        <div class="sectionOther">
            @foreach ($products as $productAlone)
            @if ($product[0]->id !== $productAlone->id)
            <div class="otherProducts">
                <img src={{ asset($productAlone->picture) }}>
                <div>
                    <p>{{$productAlone->name}}</p>
                    <p>{{$productAlone->price}} €</p>
                    <a href={{ url("/product/$productAlone->id") }}>+ d'infos</a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>
        <section id="productsAlpha" class="hidden">
        <div class="sectionOther">
            @foreach ($productsOrderAlph as $productOrderA)
            @if ($product[0]->id !== $productOrderA->id)
            <div class="otherProducts">
                <img src={{ asset($productOrderA->picture) }}>
                <div>
                    <p>{{$productOrderA->name}}</p>
                    <p>{{$productOrderA->price}} €</p>
                    <a href={{ url("/product/$productOrderA->id") }}>+ d'infos</a>
                </div>
            </div>
            @endif
            @endforeach
        </div>

    <section id="productsPrice" class="hidden">
        <div class="sectionOther">
            @foreach ($productsOrderPrice as $productOrderP)
            @if ($product[0]->id !== $productOrderP->id)
            <div class="otherProducts">
                <img src={{ asset($productOrderP->picture) }}>
                <div>
                    <p>{{$productOrderP->name}}</p>
                    <p>{{$productOrderP->price}} €</p>
                    <a href={{ url("/product/$productOrderP->id") }}>+ d'infos</a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>

</main>
<script>
    function displayProducts() {
        const element = document.getElementById("allProducts");
        element.style.display = (element.style.display === "none") ? "block" : "none";
    }

    function displayProductsOrderAlpha() {
        const element = document.getElementById("productsAlpha");
        element.style.display = (element.style.display === "none") ? "block" : "none";
    }

    function displayProductsOrderPrice() {
        const element = document.getElementById("productsPrice");
        element.style.display = (element.style.display === "none") ? "block" : "none";
    }
</script>



@endsection