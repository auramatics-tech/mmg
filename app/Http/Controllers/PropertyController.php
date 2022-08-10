<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    
    public function property_list()
    {
        $properties = Property::all();
        return view('frontend.property.property_list',compact('properties'));
    }

    public function property_details($property_id='')
    {
        $property = Property::find($property_id);
        return view('frontend.property.property_details',compact('property'));
    }
}