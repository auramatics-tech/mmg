<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\SliderController;

//property-form 
Route::get('/draft-properties', [PropertyController::class, 'draft_properties'])->name('admin.draft_properties');
Route::get('/approved-properties', [PropertyController::class, 'approved_properties'])->name('admin.approved_properties');
Route::get('/add-approval/{property_id}', [PropertyController::class, 'add_approval'])->name('admin.add_approval');
Route::get('/remove-aprroval/{property_id}', [PropertyController::class, 'remove_aprroval'])->name('admin.remove_aprroval');
Route::get('/sliders', [SliderController::class, 'image_slider_list'])->name('admin.sliders');
Route::post('/upload-slider-image', [SliderController::class, 'upload_slider_images'])->name('admin.upload_slider_images');
Route::post('/image-slider-list', [SliderController::class, 'image_slider_list'])->name('admin.image_slider_list');

