<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/**Route pour les produits */

Route::get('/boutique',[ProductController::class, 'index'])->name('products.index');


Route::get('/boutique/{slug}',[ProductController::class, 'show'])->name('products.show');




/* Route pour les panier */

Route::post('/panier/ajouter', [CartController::class, 'store'])->name('cart.store');

Route::get('/panier', [CartController::class, 'index'])->name('cart.index');

Route::delete('/panier/{rowId}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/vider', function (){

    Cart::destroy();
});