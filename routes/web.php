<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\PaymentController;
/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Register web routes with signed middleware for protection.
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/produit/{id}', [ProductController::class, 'show'])->name('produit.show');

Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
Route::get('/checkout/success', [PaymentController::class, 'success'])->name('checkout.success');
Route::get('/checkout/cancel', [PaymentController::class, 'cancel'])->name('checkout.cancel');
