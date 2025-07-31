@extends('components.layout')

@section('page_title', 'Gestion du site')

@section('content')
<main>
    <h1>Commandes passées</h1>
               
    <table style="margin: 5rem">
        <thead style="background-color:#d6ad60">
            <tr>
                <th>Numéro commande</th>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($orders as $order)
            <?php $total = 0 ?>
            <tr>
                <td rowspan={{ count($order->products)+1 }} style="background-color:#d6ad609c">{{ $order->id }}</td>
                @foreach ($order->products as $product)
                    <td style="color: #bebebe">{{$product->name}}</td>
                    <td style="color: #bebebe">{{"x".$product->pivot->quantity}}</td>
                    <td style="color: #bebebe">{{number_format($product->price, "2", ",")." €"}}</td>
                    <td style="color: #bebebe">{{number_format($product->price * $product->pivot->quantity, "2", ",")." €"}}</td>
                    <?php $total += ($product->price * $product->pivot->quantity) ?>
            </tr>
                @endforeach
            <tr>
                <td colspan="3" style="text-align: right; background-color: #d6ad605e;">Total :</td>
                <td style="background-color: #bebebe">{{number_format($total,'2',',')." €"}}</td>
            </tr>
        </tbody>

        
         @endforeach
    </table>
    
</main>
@endsection