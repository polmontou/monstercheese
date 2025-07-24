@extends('layouts/app')
@section('page_title',$product_name)

<<<<<<< HEAD
<<<<<<<< HEAD:resources/views/products/product-show.blade.php
<<<<<<<< HEAD:resources/views/products/product-show.blade.php
<<<<<<<< HEAD:resources/views/product/product-detail.blade.php
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product_name}}</title>
</head>

<body>
========
@section('content')
>>>>>>>> 135f080 (Refactor product display and add customer review component with layout updates):resources/views/product-show.blade.php
========
@section('content')
>>>>>>>> 4db7f09 (Refactor product display and add customer review component with layout updates):resources/views/product-show.blade.php
========
@section('content')
>>>>>>>> 761161a29374aa3c15d2b88b10919e2188ca1d9a:resources/views/product-show.blade.php
=======
@section('content')
>>>>>>> 761161a29374aa3c15d2b88b10919e2188ca1d9a
    <main>
        <section>
            <h1>{{$product_name}}</h1>
            <img src="/images/cheese.png" alt="Image Fromage">
            <p>Prix au kg</p>
            <div>
                <p>Quantité</p>
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
    </main>
<<<<<<< HEAD
<<<<<<<< HEAD:resources/views/products/product-show.blade.php
<<<<<<<< HEAD:resources/views/products/product-show.blade.php
<<<<<<<< HEAD:resources/views/product/product-detail.blade.php
</body>

</html>
========
@endsection
>>>>>>>> 135f080 (Refactor product display and add customer review component with layout updates):resources/views/product-show.blade.php
========
@endsection
>>>>>>>> 4db7f09 (Refactor product display and add customer review component with layout updates):resources/views/product-show.blade.php
========
@endsection
>>>>>>>> 761161a29374aa3c15d2b88b10919e2188ca1d9a:resources/views/product-show.blade.php
=======
@endsection
>>>>>>> 761161a29374aa3c15d2b88b10919e2188ca1d9a
