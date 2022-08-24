<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrowdSeller\PropertyController;

//property-form 
Route::get('/property-list', [PropertyController::class, 'all_properties'])->name('CrowdSeller.properties_list');