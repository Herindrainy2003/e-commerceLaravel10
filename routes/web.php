<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\adminController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\produitController;
use App\Http\Controllers\slidersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [clientcontroller::class,'home']);
Route::get('/shop', [clientcontroller::class,'shop']);
Route::get('cart', [clientcontroller::class,'cart']);
Route::get('checkout', [clientcontroller::class,'checkout']);
Route::get('admin',[adminController::class,'dashboard']);
Route::get('ajouterCategories',[adminController::class,'ajouterCategories']);

 Route::get('afficherCategories',[adminController::class,'afficherCategories']);
Route::get('ajouterProduit',[adminController::class,'ajouterProduit']);
Route::get('afficherProduit',[adminController::class,'afficherProduit']);
Route::get('afficherSliders',[adminController::class,'affichersliders']);

Route::get('ajouterSliders',[adminController::class,'ajoutersliders']);
Route::get('commandes',[adminController::class,'commandes']);
Route::get('login',[adminController::class,'login']);
Route::get('signup',[adminController::class,'signup']);
Route::resource('produits',produitController::class);
Route::resource('sliders',categoryController::class);
Route::resource('categories',categoryController::class);


