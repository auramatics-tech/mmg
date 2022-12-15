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
use App\Models\InspectionBook;
use App\Models\User;
use App\Models\FavouriteProperty;
use Auth;

class PropertyController extends Controller
{
    public function favourite_properties(Request $request)
    {
        $favourite_properties = FavouriteProperty::where('user_id',Auth::id())->pluck('property_id')->toArray();
        $properties = Property::where('is_approved',1)->whereIn('id',$favourite_properties)
        ->when($request->q, function ($query) use ($request) {
            $query->where('properties.address','LIKE', '%' . $request->q . '%');
        })
        ->paginate(4);
        // echo"<pre>";print_r($favourite_properties);die;
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
        Offer::updateOrCreate(['user_id'=>$request->user_id,'property_id'=>$request->property_id],['reference_id'=>$request->reference_id,'offer_price'=>str_replace('$','',$request->offer_price),'note'=>$request->note]);
        
        return redirect()->route('buyer.my_offers')->with('success',"Your bid submitted successfully, we'll contact you sortly");
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

    public function my_offers(Request $request)
    {
        $my_offers = Offer::where('user_id',Auth::id())
        ->when($request->q, function ($query) use ($request) {
            $query->where('offers.offer_price','LIKE', '%' . $request->q . '%');
        })->paginate(4);
        return view('buyer.my_offers',compact('my_offers'));
    }

    public function delete_offer($offer_id)
    {
        Offer::find($offer_id)->delete();
        return back()->with('success','Offer deleted Successfully');
    }

    public function booked_inspections(Request $request)
    {
        $booked_inspections = InspectionBook::where('user_id',Auth::id())->paginate(5);
        return view('buyer.booked_inspections',compact('booked_inspections'));
    }

    public function delete_inspection($book_inspection_id)
    {
        InspectionBook::find($book_inspection_id)->delete();
        return back()->with('success','Inspection deleted Successfully');
    }

    public function property_bid($property_id){
     
         $property = Property::find($property_id);
        //  echo"<pre>";
        //  print_r($property);
        //  die;
        $property_summary = Property::where('id',$property_id)->where('is_approved',1)->get();
        $bid_count = Offer::where('property_id',$property_id)->count();
        // echo"<pre>";print_r($bid_count);die;
        return view('buyer.property_bid',compact('property_summary','bid_count','property'));
    }

   

}
