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
use App\Models\PropertyLinkListing;
use App\Models\ReviewImages;
use App\Models\Appraisal;
use App\Models\PropertyType;
use Auth;
use DB;
use Pdf;

class PropertyController extends Controller
{
    
    public function property_list(Request $request)
    {
        // echo "<prE>";print_r($request->all());die;
         $outdoors = PropertyFeature::where('type', 'outdoor')->get();
         $indoors = PropertyFeature::where('type', 'indoor')->get();
         $heating_coolings = PropertyFeature::where('type', 'heating_cooling')->get();
         $eco_friendlies = PropertyFeature::where('type', 'eco_friendly')->get();
         $residentials = PropertyType::where('form_type', 'residential')->get();
         $bedroom = PropertyDetail::where('property_id', 'bedrooms')->get();
    
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
        $minPrice = $request->minPrice;
        $maxPrice= $request->MaxPrice;
        if (isset($request->price)) {
            $date = explode('-', $request->price);
            $minPrice= $price[0];
            $maxPrice= $price[1];
        }

        $properties = Property::select('properties.*','property_details.rental_allowances','property_details.bedrooms')
        ->where('is_approved',1)->where('is_complete',1)->leftjoin('property_details','properties.id','property_details.property_id')
        ->when(isset($request->type), function ($query) use ($request) {
            $query->whereIn('properties.form_type',$request->type);
        })->when(isset($request->search), function ($query) use ($request) {
            $query->where('properties.property_type', 'LIKE', '%' . $request->search . '%');   
        })->when(isset($request->proprty_type), function ($query) use ($request) {
            $query->whereIn('properties.property_type', $request->property_type);  
        })->when(isset($request->amenities), function ($query) use ($request) {
            $query->whereJsonContains('property_details.rental_allowances',$request->amenities);
        })->when(isset($request->indoor), function ($query) use ($request) {
            $query->whereJsonContains('property_details.indoor',$request->indoor);
        })->when(isset($request->outdoor), function ($query) use ($request) {
            $query->whereJsonContains('property_details.outdoor',$request->outdoor);
        })->when(isset($request->heating_cooling), function ($query) use ($request) {
            $query->whereJsonContains('property_details.heating_cooling',$request->heating_cooling);
        })->when(isset($request->eco_friendly), function ($query) use ($request) {
            $query->whereJsonContains('property_details.eco_friendly',$request->eco_friendly);
        })->when((isset($request->price_from) && isset($request->price_to)), function ($query) use ($request) {
            return $query->whereBetween('properties.normal_price', [$request->price_from, $request->price_to]);
        })->when((isset($request->bedroom_from) && isset($request->bedroom_to)), function ($query) use ($request) {
            return $query->whereBetween('property_details.bedrooms', [$request->bedroom_from, $request->bedroom_to]);
        })
        ->orderby($sortby,$orderby)->paginate(4);
        
        if($request->ajax()){
            $html = view('frontend.property._listing',compact('properties'))->render();
            return response($html);
        }
        $property_features = PropertyFeature::all();
        return view('frontend.property.property_list',compact('properties','residentials','property_features','outdoors', 'indoors', 'heating_coolings', 'eco_friendlies'));
    }

    public function property_details($property_id='')
    {
        
        $property_details = PropertyDetail::where('property_id',$property_id)->first();
        $latest_property = Property::where('is_approved',1)->latest('created_at')->limit(5)->get();
        $property_types = Property::select('property_type')->distinct('property_type')->get();
        // 
        $property_reviews = PropertyReview::select('property_reviews.*',DB::raw("(select profile_pic from users where `users`.`id` = property_reviews.user_id) as profile_pic"))->where('property_id',$property_id)->get();
        // echo "<pre>";print_r( $property_reviews);die;
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
        $related_properties = Property::where('property_type',$property->property_type)->where('is_approved',1)->get();
        $property_video_links = PropertyLinkListing::where('id',$property_id)->get();
       
        return view('frontend.property.property_details',compact('property','property_details','property_reviews','related_properties','latest_property','comments_count','property_types','property_video_links'));
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
        
    if (isset($request->id)) {
        $property_reviews = PropertyReview::Find($request->id)->first();
    }
    else{
        $property_reviews = new PropertyReview();
    }
    $property_reviews ->property_id = $request->property_id;
    $property_reviews ->user_id= Auth::id();
    $property_reviews ->name = $request->name;
    $property_reviews ->rating = $request->rating;
    $property_reviews ->email = $request->email;
    $property_reviews ->comments = $request->comments;
    $property_reviews->save();
    if(isset($request->upload_images) && count($request->upload_images))
    {
        foreach ($request->upload_images as $key => $img) {
            $property_review_image = new ReviewImages;
            $property_review_image->review_id = $property_reviews->id;
                $file = $img;
                $imageName = time() . $key . '.' . $file->extension();
                $property_review_image->file_type = $file->extension();
                $file->move(storage_path('app/public/review_images'), $imageName);
            $property_review_image->file_name = $imageName;
            $property_review_image->save();
        }
    }
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

public function book_appraisal()
{
    return view('frontend.book_appraisals');
}

public function save_appraisal(Request $request)
{
    $appraisal = new Appraisal();
    $appraisal->name = $request->name;
    $appraisal->address = $request->address;
    $appraisal->phone_no = $request->phone_no;
    $appraisal->email = $request->email;
    $appraisal->save();
    return redirect()->back()->with('success','Appraisal booked successfully, will get back to you sortly!');
}

}