<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'show']);
Route::get('/product/{productId}', [ProductController::class,'show']);
Route::get('/products', [CatalogController::class, 'displayCatalog']);
Route::get('/backoffice', [BackendController::class, 'displayBackoffice']);
Route::get('/backoffice/products', [BackendController::class, 'showAllProducts'])->name('backoffice.products');
Route::get('/backoffice/product/{idProduct}',[BackendController::class, 'showProduct']);
Route::post('/backoffice/product/{idProduct}/edited',[BackendController::class, 'updateProduct']);
Route::get('/backoffice/product/{idProduct}/edit',[BackendController::class, 'formProduct']);

