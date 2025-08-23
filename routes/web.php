<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;


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
