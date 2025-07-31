<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'show']);
Route::get('/product/{name}', [ProductController::class,'show']);
Route::get('/products', [CatalogController::class, 'displayCatalog']);
Route::prefix('backoffice')->controller(BackofficeController::class)->group(function()   {
    
    Route::get('/products', 'displayBackoffice');
    Route::get('/product/create', 'displayCreate');
    Route::put('/product/new', 'newProduct')->name('product.new');
    Route::get('/product/{id}', 'showProduct');
    Route::get('/product/{id}/edit', 'updateProduct');
    Route::post("/product/{id}/edited", action: 'update')->name('product.update');
    Route::delete('/product/{id}', 'deleteProduct')->name('product.delete');
    
});