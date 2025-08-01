@extends('components.layout')

@section('page_title', 'Panier')

@section('content')
<h1>Votre panier</h1>

@if(session('cart'))
<form action="{{ url('/cart/update-cart') }}" method="POST">
    @csrf
    <table style="margin-left: 5rem">
        <thead style="background-color:#d6ad60">
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $total = 0 ?>
            <tr>
                @foreach (session('cart') as $id => $product)
                    <td style="color: #bebebe">{{$product->name}}</td>
                    <td style="color: #bebebe">{{number_format($product->price, "2", ",")." €"}}</td>
                    <td ><input type="number" name="{{ $product->id }}" value={{ $product->order_quantity }}></td>
                    <td style="color: #bebebe">{{number_format($product->price * $product->order_quantity, "2", ",")." €"}}</td>
                    <?php $total += ($product->price * $product->order_quantity) ?>
            </tr>
                @endforeach
            <tr>
                <td colspan="3" style="text-align: right; background-color: #d6ad605e;">Total :</td>
                <td style="background-color: #bebebe5e">{{number_format($total,'2',',')." €"}}</td>
            </tr>
        </tbody>
    </table>
    <div style="display:flex; gap: 4rem; margin: 2rem">
        <button type="submit" name="updateDelete" value="update">Mettre à jour mon panier</button>
        <button type="submit" name="updateDelete" value="delete">Vider mon panier</button>
    </div>
</form>
@else
    <div style="color: #999999; margin-left: 5rem">PANIER VIDE</div>
@endif
@endsection
