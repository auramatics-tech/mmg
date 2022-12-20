<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\BookInspection;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\PropertyFeature;
use App\Models\PropertyDetail;
use App\Models\PropertyDocument;
use App\Models\PropertyLinkListing;
use App\Models\Inspection;
use App\Models\Offer;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Appraisal;
use Auth;
use DB;

class PropertyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function draft_properties(Request $request)
    {
        $properties = Property::where('is_approved',0)->when(isset($request->q), function ($query) use ($request) {
            $query->whereRaw("(address LIKE '%" . $request->q . "%' or normal_price LIKE '%" . $request->q . "%' 
             or rental_per_month LIKE '%" . $request->q . "%'  or commercial_rental_per_annum LIKE '%" . $request->q . "%')");
        })->get();
        return view('admin.draft_properties',compact('properties'));
    }

    public function approved_properties(Request $request)
    {
        $properties = Property::where('is_approved',1)->when(isset($request->q), function ($query) use ($request) {
            $query->whereRaw("(address LIKE '%" . $request->q . "%' or normal_price LIKE '%" . $request->q . "%' 
             or rental_per_month LIKE '%" . $request->q . "%'  or commercial_rental_per_annum LIKE '%" . $request->q . "%')");
        })->get();
        return view('admin.draft_properties',compact('properties'));
    }

    public function add_approval($property_id)
    {
        $property = Property::where('id', $property_id)->update(['is_approved'=>1]);
        return back()->with("success","Property approved successful.");
    }

    public function remove_aprroval($property_id)
    {
        $property = Property::where('id', $property_id)->update(['is_approved'=>0]);
        return back()->with("success","Property approval removed successful.");
    }

    public function appraisal(Request $request)
    {
        $appraisal_data = Appraisal::when(isset($request->q), function ($query) use ($request) {
            $query->whereRaw("(name LIKE '%" . $request->q . "%' or address LIKE '%" . $request->q . "%' or email LIKE '%"
             . $request->q . "%' or year LIKE '%" . $request->q . "%' or property_worth LIKE '%" . $request->q . "%'
            or agent LIKE '%" . $request->q . "%' or date LIKE '%" . $request->q . "%' or prefered_method LIKE '%" . $request->q . "%' or hear_about LIKE '%" . $request->q . "%')");})->get();
         
        return view('admin.appraisal_listing',compact('appraisal_data'));
    }
    
    public function index(Request $request){
        $bid_through_links = Offer::select('offers.*',
        DB::raw("(select concat(COALESCE(users.first_name,''),' ',COALESCE(users.last_name,'')) from `users` where `users`.`id` = offers.user_id) as user_data"),
        DB::raw("(select concat(COALESCE(users.first_name,''),' ',COALESCE(users.last_name,'')) from `users` where `users`.`id` = offers.reference_id) as croud_seller_name"),
        DB::raw("(select properties.normal_price from `properties` where `properties`.`id` = offers.property_id) as normal_price"),
        DB::raw("(select properties.rental_per_month from `properties` where `properties`.`id` = offers.property_id) as rental_per_month"),
        DB::raw("(select properties.commercial_rental_per_annum from `properties` where `properties`.`id` = offers.property_id) as commercial_rental_per_annum"),
        DB::raw("(select properties.commercial_listing_type from `properties` where `properties`.`id` = offers.property_id) as commercial_listing_type"),
        DB::raw("(select properties.form_type from `properties` where `properties`.`id` = offers.property_id) as form_type"),
        DB::raw("(select properties.commercial_listing_type from `properties` where `properties`.`id` = offers.property_id) as commercial_listing_type"),
        )->whereNotNull('reference_id')->when(isset($request->q), function ($query) use ($request) {
            $query->havingRaw("(user_data LIKE '%" . $request->q . "%' or croud_seller_name LIKE '%" . $request->q . "%')");
        })->get();
        // echo"<pre>";print_r($bid_through_link);die;
        return view('admin.bid_listing_through_croud',compact('bid_through_links'));
    }

    public function seller_croud_selller_user(Request $request){
       $seller_croud_sellers = UserRole::select('user_roles.*',
       DB::raw("(select concat(COALESCE(users.first_name,''),' ',COALESCE(users.last_name,'')) from `users` where `users`.`id` = user_roles.user_id) as user_data"),)
        ->where('is_approved' , 0)->wherein('role' , [1,2])->get();
    //    echo"<pre>";print_r($seller_croud_sellers);die;
        return view('admin.seller_croud_seller',compact('seller_croud_sellers'));
    }
}
