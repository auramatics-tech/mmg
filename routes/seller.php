<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\DashboardController;
use App\Http\Controllers\Seller\PropertyController;
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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('seller.dashboard');

//property-form 
Route::get('/property-list', [PropertyController::class, 'index'])->name('seller.property_list');
Route::get('/add-property-form', [PropertyController::class, 'add_property_form'])->name('seller.add_property_form');
Route::get('/property-detail-form/{property_id}', [PropertyController::class, 'property_details_form'])->name('seller.property_details_form');
Route::get('/property-image-form/{property_id}', [PropertyController::class, 'property_image_form'])->name('seller.property_image_form');
Route::get('/property-inspection-form/{property_id}', [PropertyController::class, 'property_inspection_form'])->name('seller.property_inspection_form');
Route::post('/save-listing-details', [PropertyController::class, 'save_listing_details'])->name('seller.save_listing_details');
Route::post('/save-property-details', [PropertyController::class, 'save_property_details'])->name('seller.save_property_details');
Route::post('/save-property-images', [PropertyController::class, 'save_property_images'])->name('seller.save_property_images');
Route::post('/save-inspections', [PropertyController::class, 'save_inspections'])->name('seller.save_inspections');
Route::get('/property-delete/{id}', [PropertyController::class, 'property_delete'])->name('seller.property_delete');