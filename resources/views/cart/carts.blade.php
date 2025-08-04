@extends('components/backend')
@section('page_title','Liste Carts')

@section('content')

<main>
    <h1>Liste des paniers</h1>

    <div class="listUser">
        <ul>
    @foreach ($carts as $cart)
        <li>{{$cart->total}}</li>
    @endforeach
        </ul>
    </div>
</main>


@endsection