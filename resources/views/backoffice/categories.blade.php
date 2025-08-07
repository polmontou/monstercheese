@extends('components/layout')
@section('page_title','Admin categories')

<main>
    @section('content')
    <section>
        <h1>Catégories de produits</h1>

        @foreach ($categories as $category)
        <div>
            <p>{{$category->name}} ({{$category->id}})</p>
            <ul>
                @foreach ($categories->products as $product)
                <li>{{$product->name}}</li>
                @endforeach
            </ul>
        </div>

        @endforeach

    </section>
    @endsection

</main>