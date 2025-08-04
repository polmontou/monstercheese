@extends('components/layout')
@section('page_title',"Création d'un produit")


@section('content')
<main>
    <h1>Créer un produit</h1>


    <form method="POST" action="{{ url('/backoffice/products/created') }}">
        @csrf
        @method('post')

        <div class="shortFormArea">
            <label for='name'>Name</label>
            <input type='text' id='name' name='name'>
        </div>
        <div>
            <label for='description'>Description</label>
            <textarea type='text' id='description' name='description' ></textarea>
        </div>
        <div class="shortFormArea">
            <label for='price'>Price</label>
            <input type='number' id='price' name='price'>
        </div>
        <div class="shortFormArea">
            <label for='weight'>Weight</label>
            <input type='number' id='weight' name='weight'>
        </div>
        <div class="shortFormArea">
            <label for='picture'>Picture</label>
            <input type='file' id='picture' name='picture'>
        </div>
        <div class="shortFormArea">
            <label for='stock_quantity'>Stock available</label>
            <input type='number' id='stock_quantity' name='stock_quantity'>
        </div>
        <div class="shortFormArea">
            <label for='category'>Category</label>
            <input type='number' id='category' name='category'>
        </div>
        <div>
            <label for='available'>Availability</label>
            <div class='available'>
                <div class='radioButton'>
                    <label for='available_yes'>Yes</label>
                    <input type='radio' id='available_yes' name='available' value='1'>
                </div>
                <div class='radioButton'>
                    <label for='available_no'>No</label>
                    <input type='radio' id='available_no' name='available' value='0'>
                </div>
            </div>
        </div>
        <input type='submit' name="update_product" value='Sauvegarder les modifs'>
    </form>



</main>





@endsection