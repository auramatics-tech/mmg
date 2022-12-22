<?php

namespace App\Http\Controllers\CrowdSeller;
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
use DB;
use App\Models\UserRole;
use Auth;

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
    public function all_properties(Request $request)
    {
        if (isset($request->page)) {
            $count = ($request->page - 1) * 10; //according to paginate value
        } else {
            $count = 0;
        }
        $properties = Property::where('is_approved',1)
        ->when(isset($request->q), function ($query) use ($request) {
            $query->whereRaw("(address LIKE '%" . $request->q . "%' or normal_price LIKE '%" . $request->q . "%' 
             or rental_per_month LIKE '%" . $request->q . "%'  or commercial_rental_per_annum LIKE '%" . $request->q . "%')");
        })->paginate(10);
        return view('crowd_seller.property_list',compact('properties','count'));
    }

    public function bid_through_link_list(Request $request){
        if (isset($request->page)) {
            $count = ($request->page - 1) * 10; //according to paginate value
        } else {
            $count = 0;
        }
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
        })->orderby('id','desc')->where('reference_id',Auth::id())->paginate(10);
        return view('crowd_seller.bid_list_through_link',compact('bid_through_links','count'));
    }
}
