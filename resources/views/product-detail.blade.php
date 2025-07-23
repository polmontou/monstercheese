<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product_name}}</title>
</head>

<body>
    @include('header')
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
            <h2>Avis client</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra maximus augue.</p>
            <form>
                <textarea></textarea>
                <button>S'abonner</button>
            </form>
        </section>
    </main>
    @include('footer')
</body>

</html>