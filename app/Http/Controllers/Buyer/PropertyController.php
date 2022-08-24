<?php

namespace App\Http\Controllers\Buyer;
use App\Http\Controllers\Controller;
use App\Models\BookInspection;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\PropertyFeature;
use App\Models\PropertyDetail;
use App\Models\PropertyDocument;
use App\Models\Offer;
use App\Models\Inspection;
use App\Models\User;
use App\Models\FavouriteProperty;
use Auth;

class PropertyController extends Controller
{
    public function favourite_properties()
    {
        $favourite_properties = FavouriteProperty::where('user_id',Auth::id())->pluck('property_id')->toArray();
        $properties = Property::where('is_approved',1)->whereIn('id',$favourite_properties)->get();
        return view('buyer.favourite_properties',compact('properties'));
    }

    public function offer_form($property_id='')
    {
        $property_offer = Offer::where(['property_id'=>$property_id,'user_id'=>Auth::id()])->first();
        if(!isset( $property_offer->id))
        {
            $property_offer = '';
        }
        $properties = Property::all();
        return view('buyer.offer_form',compact('property_id','properties','property_offer'));
    }
    
    public function save_offer(Request $request)
    {
        Offer::updateOrCreate(['user_id'=>$request->user_id,'property_id'=>$request->property_id],['reference_id'=>$request->reference_id,'offer_price'=>$request->offer_price,'note'=>$request->note]);
        
        return back()->with('success','Offer send Successfully');
    }

    public function book_inspection($property_id)
    {
        $book_inspection = BookInspection::where(['property_id'=>$property_id,'user_id'=>Auth::id()])->first();
        if(!isset($book_inspection->id))
        {
            $book_inspection = new BookInspection;
            $book_inspection->property_id = $property_id;
            $book_inspection->user_id = Auth::id();
            $book_inspection->save();
        }
        return back()->with('success','Inspection booked Successfully');
    }

    public function my_offers()
    {
        $my_offers = Offer::where('user_id',Auth::id())->get();
        
        return view('buyer.my_offers',compact('my_offers'));
    }

    public function delete_offer($offer_id)
    {
        Offer::find($offer_id)->delete();
        return back()->with('success','Offer deleted Successfully');
    }

    public function booked_inspections()
    {
        $booked_inspections = BookInspection::where('user_id',Auth::id())->get();
        return view('buyer.booked_inspections',compact('booked_inspections'));
    }

    public function delete_inspection($book_inspection_id)
    {
        BookInspection::find($book_inspection_id)->delete();
        return back()->with('success','Inspection deleted Successfully');
    }
}
