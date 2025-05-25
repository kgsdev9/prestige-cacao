<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
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
use App\Http\Controllers\Sondage\SondageController;
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
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.page')->middleware('signed');
Route::get('/faq', function () {
    return view('home.faq');
})->name('faq')->middleware('signed');

Route::get('/condtion-generale-utilisisation', function () {
    return view('home.conditionutilisation');
})->name('condition.utilisation')->middleware('signed');


Route::get('/devenir-partenaire', function () {
    return view('home.partenaire');
})->name('partenaire.home')->middleware('signed');


Route::get('/comment-ca-marche', function () {
    return view('home.commentcamarche');
})->name('comment.ca.marche')->middleware('signed');

Route::get('/emploi', function () {
    return view('home.emploi');
})->name('emploi')->middleware('signed');



Route::get('/devenir-promoteur', function () {
    return view('pages.devenirpromoteur');
})->name('home.promoteur')->middleware('signed');


Route::get('/termes-condition', function () {
    return view('home.termeconditon');
})->name('terme.conditon')->middleware('signed');


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
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');;


Route::post('/sondage', [SondageController::class, 'store'])->name('sondage.store');
Route::get('/file-attente-service', [SondageController::class, 'index'])->name('sondages.scolaire');
