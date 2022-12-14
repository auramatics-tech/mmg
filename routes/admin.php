<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\SliderController;

//property-form 
Route::get('/draft-properties', [PropertyController::class, 'draft_properties'])->name('admin.draft_properties');
Route::get('/approved-properties', [PropertyController::class, 'approved_properties'])->name('admin.approved_properties');
Route::get('/appraisal', [PropertyController::class, 'appraisal'])->name('admin.appraisal');
Route::get('/add-approval/{property_id}', [PropertyController::class, 'add_approval'])->name('admin.add_approval');
Route::get('/remove-aprroval/{property_id}', [PropertyController::class, 'remove_aprroval'])->name('admin.remove_aprroval');
Route::get('/bid-through-croud-seller', [PropertyController::class, 'index'])->name('admin.index');
Route::get('/seller-croud-selller-user', [PropertyController::class, 'seller_croud_selller_user'])->name('admin.seller_croud_selller_user');
Route::get('/seller-croud-selller-delete/{user_id}', [PropertyController::class, 'seller_croud_selller_delete'])->name('admin.seller_croud_selller_delete');
Route::get('/approved-seller-croud-seller/{user_id}/{role}', [PropertyController::class, 'approved_seller_croud_seller'])->name('admin.approved_seller_croud_seller');
Route::get('/sliders', [SliderController::class, 'image_slider_list'])->name('admin.sliders');
Route::post('/upload-slider-image', [SliderController::class, 'upload_slider_images'])->name('admin.upload_slider_images');
Route::post('/image-slider-list', [SliderController::class, 'image_slider_list'])->name('admin.image_slider_list');

