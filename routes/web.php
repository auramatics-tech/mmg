<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/', [HomeController::class, 'seller_login'])->name('seller_login');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about_us');
Route::get('/seller-register', [HomeController::class, 'seller_registration'])->name('seller_registration');
