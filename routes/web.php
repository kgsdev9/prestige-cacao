<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/devenir-membre', [HomeController::class, 'becomeMembre'])->name('become.membership');

Route::get('/fac', function () {
    return view('home.faq');
})->name('fac');


Route::get('/about', function () {
    return view('home.about');
})->name('about');

Route::get('/assurance-scolaire', function () {
    return view('home.assurance');
})->name('assurance.scolaire');


Route::get('/cotisations', function () {
    return view('home.cotisation');
})->name('cotisations.scolaire');


Route::get('/conseils', function () {
    return view('home.conseil');
})->name('conseils.scolaire');

Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/registerForm', [RegisterController::class, 'registerForm'])->name('register.assurance');

