@extends('components/layout')
@section('page_title','Admin')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin {{$product[0]->name}}</title>
</head>



<main>
@section('content')
    <section>
        <table>
            <thead>
                <tr>
                <th>id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Weight</th>
                <th>Picture</th>
                <th>Stock available</th>
                <th>Category</th>
                <th>Available</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>{{$product[0]->id}}</td>
                <td>{{$product[0]->name}}</td>
                <td>{{$product[0]->description}}</td>
                <td>{{$product[0]->price}}</td>
                <td>{{$product[0]->weight}}</td>
                <td><img src={{asset($product[0]->picture)}}>
                </td>
                <td>{{$product[0]->stock}}</td>
                <td>{{$product[0]->category}}</td>
                <td>{{$product[0]->available}}</td>
                </tr>
            </tbody>
        </table>

    </section>
    @endsection

</main>





