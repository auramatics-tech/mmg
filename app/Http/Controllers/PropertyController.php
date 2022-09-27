<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\FavouriteProperty;
use App\Models\PropertyView;
use App\Models\PropertyFeature;
use App\Models\PropertyDetail;
use App\Models\PropertyReview;
use App\Models\InspectionBook;
use Auth;

class PropertyController extends Controller
{
    
    public function property_list(Request $request)
    {
        if(isset($request->sort) && $request->sort == 'o'){
            $orderby = 'ASC';
            $sortby = 'properties.id';
        }elseif(isset($request->sort) && $request->sort == 'n'){
            $orderby = 'DESC';
            $sortby = 'properties.id';
        }elseif(isset($request->sort) && $request->sort == 'l'){
            $orderby = 'ASC';
            $sortby = 'properties.normal_price';
        }
        elseif(isset($request->sort) && $request->sort == 'h'){
            $orderby = 'DESC';
            $sortby = 'properties.normal_price';
        }else{
            $orderby = 'DESC';
            $sortby = 'properties.id';
        }
       
        $properties = Property::select('properties.*','property_details.rental_allowances')
        ->where('is_approved',1)->leftjoin('property_details','properties.id','property_details.property_id')
        ->when(isset($request->type), function ($query) use ($request) {
            $query->whereIn('properties.form_type',$request->type);
        })->when(isset($request->search), function ($query) use ($request) {
            $query->where('properties.property_type', 'LIKE', '%' . $request->search . '%');
        })->when(isset($request->amenities), function ($query) use ($request) {
            $query->whereJsonContains('property_details.rental_allowances',$request->amenities);
        })->when(isset($request->amenities), function ($query) use ($request) {
            $query->whereJsonContains('property_details.rental_allowances',$request->amenities);
        })->orderby($sortby,$orderby)->paginate(4);
        $property_features = PropertyFeature::all();
        return view('frontend.property.property_list',compact('properties','property_features'));
    }

    public function property_details($property_id='')
    {
        $property_details = PropertyDetail::where('property_id',$property_id)->first();
        $latest_property = Property::latest('created_at')->limit(5)->get();
        $property_types = Property::select('property_type')->distinct('property_type')->get();
        // echo "<pre>";print_r( $property_types);die;
        $property_reviews = PropertyReview::where('property_id',$property_id)->get();
        $comments_count = PropertyReview::where('property_id',$property_id)->count();
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
        $related_properties = Property::where('property_type',$property->property_type)->get();
        return view('frontend.property.property_details',compact('property','property_details','property_reviews','related_properties','latest_property','comments_count','property_types'));
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
    public function property_reviews(Request $request){
        
    //  echo "<pre>";
    //         print_r($request->all());
    //         die;
    if (isset($request->id)) {
        $property_reviews = PropertyReview::Find($request->id)->first();
    }
    else{
        $property_reviews = new PropertyReview();
    }
    $property_reviews ->property_id = $request->property_id;
    $property_reviews ->name = $request->name;
    $property_reviews ->email = $request->email;
    $property_reviews ->comments = $request->comments;
    $property_reviews->save();
    return redirect()->back();
}
public function inspection_books(Request $request){
    if (isset($request->id)) {
        $inspection_books= InspectionBook::Find($request->id)->first();
    }
    else{
        $inspection_books = new InspectionBook();
    }
    $inspection_books ->property_id = $request->property_id;
    $inspection_books ->inspection_date = $request->inspection_date;
    $inspection_books->inspection_time = $request->inspection_time;
    $inspection_books->save();
    return redirect()->back();

}

public function property_bid(){
    return view('frontend.property.property_bid');
}

}