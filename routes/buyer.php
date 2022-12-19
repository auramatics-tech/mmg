<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buyer\PropertyController;
use App\Http\Controllers\Buyer\DashboardController;
use App\Http\Controllers\Buyer\UserRoleController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('buyer.dashboard');

//property-form 
Route::get('/favourite-properties', [PropertyController::class, 'favourite_properties'])->name('buyer.favourite_properties');
Route::get('/offer-form/{property_id?}', [PropertyController::class, 'offer_form'])->name('buyer.offer_form');
Route::post('/save-offer', [PropertyController::class, 'save_offer'])->name('buyer.save_offer');
Route::get('/delete-offer/{property_id?}', [PropertyController::class, 'delete_offer'])->name('buyer.delete_offer');
Route::get('/my-offers', [PropertyController::class, 'my_offers'])->name('buyer.my_offers');
Route::get('/book-inspection/{property_id?}', [PropertyController::class, 'book_inspection'])->name('buyer.book_inspection');
Route::get('/booked-inspections', [PropertyController::class, 'booked_inspections'])->name('buyer.booked_inspections');
Route::get('/delete-inspection/{book_inspection_id}', [PropertyController::class, 'delete_inspection'])->name('buyer.delete_inspection');


Route::get('/become-seller', [UserRoleController::class, 'become_seller'])->name('buyer.become_seller');
Route::get('/become-crowd-seller', [UserRoleController::class, 'become_crowd_seller'])->name('buyer.become_crowd_seller');
//property bid form
Route::get('/property-bid/{property_id?}', [PropertyController::class, 'property_bid'])->name('buyer.property_bid')->middleware('auth');
