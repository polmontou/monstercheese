<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'show']);
Route::get('/product/{productId}', [ProductController::class,'show']);
Route::get('/products', [CatalogController::class, 'displayCatalog']);

/*Route backoffice*/
Route::get('/backoffice', [BackendController::class, 'displayBackoffice']);
Route::get('/backoffice/products', [BackendController::class, 'showAllProducts'])->name('backoffice.products');
Route::get('/backoffice/product/{idProduct}',[BackendController::class, 'showProduct']);
Route::post('/backoffice/product/{idProduct}/edited',[BackendController::class, 'updateProduct']);
Route::get('/backoffice/product/{idProduct}/edit',[BackendController::class, 'formProduct']);

Route::get('/backoffice/product/{idProduct}/delete',[BackendController::class,'delete']);
Route::get('/backoffice/products/new',[BackendController::class,'formCreate']);
Route::post('/backoffice/products/created',[BackendController::class,'create']);

/*Route User*/
Route::get('/user', [UserController::class,'showAll']);

Route::get('/backoffice/categories',[BackendController::class, 'showCategory']);