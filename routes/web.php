<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'show']);
Route::get('/product/{id}', [ProductController::class,'show']);
Route::get("/products", [CatalogController::class, 'displayCatalog']);
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
Route::controller(UserController::class)->group(function (){
    Route::get('/connect', 'displayConnection');
});

