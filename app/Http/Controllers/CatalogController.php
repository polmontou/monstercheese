<?php

namespace App\Http\Controllers;

class CatalogController extends Controller {
    public function displayCatalog(){
        return view('catalog');
    }
}