<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Http\Request;

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
Auth::routes([
    'register' => true, // Registration Routes...
    'reset' => true, // Password Reset Routes...
    'verify' => true, // Email Verification Routes...
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about_us');
Route::get('/registeration', [HomeController::class, 'registration'])->name('registration');

//property
Route::get('/property-details/{id}', [PropertyController::class, 'property_details'])->name('property_details');
Route::get('/property-list', [PropertyController::class, 'property_list'])->name('property_list');
Route::get('/add-to-favourite/{id}', [PropertyController::class, 'add_to_favourite'])->name('add_to_favourite');
Route::post('/property-reviews', [PropertyController::class, 'property_reviews'])->name('property_reviews');
Route::post('/inspection-books', [PropertyController::class, 'inspection_books'])->name('inspection_books');
//search 
Route::get('/property_search', [PropertyController::class, 'property_search'])->name('property_search');
Route::get('/property-bid', [PropertyController::class, 'property_bid'])->name('property_bid');


//user
Route::get('/user-profile', [UserController::class, 'user_profile'])->middleware('auth')->name('user_profile');
Route::post('/update-profile', [UserController::class, 'update_profile'])->middleware('auth')->name('update_profile');


