<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{name}', [ProductController::class,'show']);
Route::get('/products', [CatalogController::class, 'displayCatalog']);
