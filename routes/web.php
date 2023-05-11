<?php

use Illuminate\Support\Facades\Route;

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

//Route for the HOME PAGE
Route::get('/', function () {
    return view('index');
});

//Route for the About Us Page
 use App\Http\Controllers\AboutUsController;
  Route::get('/AboutUs', [AboutUsController::class, 'ourStory'])->name('ourStory');
  Route::get('/AbtUs', [AboutUsController::class, 'howitWorks'])->name('howitWorks');
 

  //Route for the Scholarships Page
  use App\Http\Controllers\ScholarshipsController;
  Route::get('/Scholarships', [ScholarshipsController::class, 'scholarships'])->name('scholarships');
  Route::get('/stypeNGO', [ScholarshipsController::class, 'ngo'])->name('ngo');
  Route::get('/stypePrivate', [ScholarshipsController::class, 'private'])->name('private');
  Route::get('/stypeGovernment', [ScholarshipsController::class, 'gov'])->name('gov');


   //Route for the Support Center Page
  use App\Http\Controllers\SupportController;
  Route::get('/SupCenter', [SupportController::class, 'faqs'])->name('faqs');
  Route::get('/SupCtr', [SupportController::class, 'terms'])->name('terms');


     //Route for Affiliates Page
  use App\Http\Controllers\AffiliateController;
  Route::get('/Affil', [AffiliateController::class, 'afList'])->name('afList');
  Route::get('/Affiliate', [AffiliateController::class, 'beAffiliate'])->name('beAffiliate');


  // use App\Http\Controllers\HomeController;
// Route::get('/', [HomeController::class, 'index']);

// use App\Http\Controllers\AboutUsController;
// Route::get('/aboutUS', [AboutUsController::class, 'ourStory']);

// use App\Http\Controllers\ScholarshipsController;
// Route::get('/scholarships', [AboutUsController::class, 'ourStory']);



 Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::middleware(['auth:admin'])->group(function () {
   Route::get('/admin/dashboard', 'AdminController@dashboard');
 });
