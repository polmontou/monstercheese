@extends('components/layout')
@section('page_title',"Update " . $product[0]->name)


@section('content')
<form method="POST" action="{{ url('/backoffice/product/' . $product[0]->id . '/edited') }}">
    @csrf
    @method('post')
    <div class="shortFormArea">
        <label for='id'>Id</label>
        <input type='number' id='id'name='id' value='{{$product[0]->id}}'>
    </div>
    <div class="shortFormArea">
        <label for='name'>Name</label>
        <input type='text' id='name' name='name' value='{{$product[0]->name}}'>
    </div>
    <div>
        <label for='description'>Description</label>
        <textarea type='text' id='description'name='description' value=''>{{$product[0]->description}}</textarea>
    </div>
    <div class="shortFormArea">
        <label for='price'>Price</label>
        <input type='number' id='price' name='price' value='{{$product[0]->price}}'>
    </div>
    <div class="shortFormArea">
        <label for='weight'>Weight</label>
        <input type='number' id='weight'name='weight' value='{{$product[0]->weight}}'>
    </div>
    <div class="shortFormArea">
        <label for='picture'>Picture</label>
        <input type='image' id='picture' name='picture' src='{{asset($product[0]->picture)}}'>
    </div>
    <div class="shortFormArea">
        <label for='stock_quantity'>Stock available</label>
        <input type='number' id='stock_quantity' name='stock_quantity' value='{{$product[0]->stock_quantity}}'>
    </div>
    <div class="shortFormArea">
        <label for='category'>Category</label>
        <input type='number' id='category'name='category' value='{{$product[0]->category}}'>
    </div>
    <div>
        <label for='available'>Availability</label>
        <div class='available'>
            <div class='radioButton'>
                <label for='available_yes'>Yes</label>
                <input type='radio' id='available_yes' name='available' value='1' @checked($product[0]->available)>
            </div>
            <div class='radioButton'>
                <label for='available_no'>No</label>
                <input type='radio' id='available_no' name='available' value='0' @checked(!$product[0]->available)>
            </div>
        </div> 
    </div>
    <input type='submit' name="update_product" value='Sauvegarder les modifs'>
</form>







@endsection