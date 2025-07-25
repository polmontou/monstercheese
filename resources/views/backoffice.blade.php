@extends('components/backend')
@section('page_title','Admin')

@section('content')
<main>
   <h1>Page d'administration des produits</h1>
    @foreach ($products as $product)
    <p>{{$product->name}}</p>
    @endforeach  
</main>


@endsection
