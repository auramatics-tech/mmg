<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\FavouriteProperty;
use App\Models\PropertyView;
use Auth;

class PropertyController extends Controller
{
    
    public function property_list()
    {
        $properties = Property::where('is_approved',1)->get();
        return view('frontend.property.property_list',compact('properties'));
    }

    public function property_details($property_id='')
    {
        $property = Property::find($property_id);
        if(Auth::check())
        {
            $property_view = PropertyView::where(['user_id'=>Auth::id(),'property_id'=>$property_id])->first();
            if(!isset($property_view->id))
            {
                $property_view = new PropertyView;
                $property_view->user_id = Auth::id();
                $property_view->property_id = $property_id;
                $property_view->save();
            }
        }
        return view('frontend.property.property_details',compact('property'));
    }

    public function add_to_favourite($property_id='',Request $request)
    {
        $favourite_property = FavouriteProperty::where(['user_id'=>Auth::id(),'property_id'=>$property_id])->first();
        if(isset($favourite_property->id))
        {
            $favourite_property->delete(); 
            $is_fav = 0;
        }
        else
        {
            $favourite_property = new FavouriteProperty;
            $favourite_property->user_id = Auth::id();
            $favourite_property->property_id = $property_id;
            $favourite_property->save();
            $is_fav = 1;
        }
        if($request->ajax())
        {
            return response()->json(["success"=>true,'is_fav'=>$is_fav]);
        }
        return back();
    }
}