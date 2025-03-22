<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Cotisation\CotisationController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Pret\PretController;
use App\Http\Controllers\Profile\UpdateProfileController;
use App\Http\Controllers\Promoteur\PromoteurController;
use App\Http\Controllers\Rapport\RapportController;
use App\Http\Controllers\Statistique\StatistiqueController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Register web routes with signed middleware for protection.
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');

// Pages statiques protégées
Route::get('/devenir-membre', [HomeController::class, 'becomeMembre'])->name('become.membership')->middleware('signed');
Route::get('/promoteur', [PromoteurController::class, 'becomePromoteur'])->name('become.promoteur')->middleware('signed');
Route::get('/fac', function () {
    return view('home.faq');
})->name('fac')->middleware('signed');

Route::get('/about', function () {
    return view('home.about');
})->name('about')->middleware('signed');

Route::get('/assurance-scolaire', function () {
    return view('home.assurance');
})->name('assurance.scolaire')->middleware('signed');

Route::get('/cotisations', function () {
    return view('home.cotisation');
})->name('cotisations.scolaire')->middleware('signed');

Route::get('/conseils', function () {
    return view('home.conseil');
})->name('conseils.scolaire')->middleware('signed');

// Route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route pour register et login protégées
Route::get('/registerForm', [RegisterController::class, 'registerForm'])->name('register.assurance')->middleware('signed');
Route::get('/login/form', [LoginController::class, 'loginForm'])
    ->name('login.assurance')
    ->middleware('guest');
// Route des clients protégée
//Route::resource('/clients', ClientController::class)->middleware('signed');

Route::resource('/clients', ClientController::class);
Route::resource('/cotisation', CotisationController::class);
Route::resource('/prets', PretController::class);
Route::resource('/rapports', RapportController::class);
Route::resource('/statistiques', StatistiqueController::class);
Route::get('/update/profile', [UpdateProfileController::class, 'myProfile'])->name('profile.update');



// Page de succès après inscription
Route::get('/success/{user}', [HomeController::class, 'successRegister'])
    ->name('register.success')
    ->middleware('signed');

Route::post('/login', [LoginController::class, 'login']);
