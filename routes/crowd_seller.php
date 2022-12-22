<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrowdSeller\PropertyController;

//property-form 
Route::get('/property-list', [PropertyController::class, 'all_properties'])->name('CrowdSeller.properties_list');
Route::get('/bid-through-link-list', [PropertyController::class, 'bid_through_link_list'])->name('CrowdSeller.bid_through_link_list');