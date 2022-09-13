<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\FavouriteProperty;
use App\Models\PropertyView;
use App\Models\PropertyFeature;
use App\Models\PropertyDetail;
use Auth;

class PropertyController extends Controller
{
    
    public function property_list(Request $request)
    {
       
      
        $properties = Property::select('properties.*','property_details.rental_allowances')
        ->where('is_approved',1)->leftjoin('property_details','properties.id','property_details.property_id')
        ->when(isset($request->type), function ($query) use ($request) {
            $query->whereIn('properties.form_type',$request->type);
        })->when(isset($request->search), function ($query) use ($request) {
            $query->where('properties.property_type', 'LIKE', '%' . $request->search . '%');
        })->when(isset($request->amenities), function ($query) use ($request) {
            $query->whereJsonContains('property_details.rental_allowances',$request->amenities);
        })->paginate(4);
        $property_features = PropertyFeature::all();
        // echo "<pre>";print_r($properties);die;
        return view('frontend.property.property_list',compact('properties','property_features'));
    }

    public function property_details($property_id='')
    {
        $property_details = PropertyDetail::All();
        // echo "<pre>";print_r( $property_details );die;
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
            // // echo "<pre>";
            // print_r($property_view);
            // die;
        }
        return view('frontend.property.property_details',compact('property','property_details'));
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