<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'show']);
Route::get('/product/{id}', [ProductController::class,'show']);
Route::get("/products", [CatalogController::class, 'displayCatalog'])->name('catalog');
Route::prefix('/backoffice')->controller(BackofficeController::class)->group(function (){
    Route::get('/products', 'displayBOCatalog')->name('backoffice.products');
    Route::get('/product/new', 'displayAddForm');
    Route::put('/product/new', 'createProduct');
    Route::get('/product/{id}', 'displayBOProduct');
    Route::get('/product/{id}/edit', 'displayProductEditor');
    Route::post('/product/{id}/edited', "updateProduct");
    Route::delete('/product/{id}/deleted', "deleteProduct");  
    Route::get('/orders', 'displayOrders');    
});
Route::controller(CartController::class)->group(function (){
    Route::get('/cart','displayCart')->name('cart');
    Route::post('/cart/add-to-cart', 'addToCart')->name('cart.addToCart');
    Route::post('cart/update-cart','updateCart');
});
Route::controller(UserController::class)->group(function (){
    Route::get('/connect', 'displayConnection');
});

