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
use App\Models\User;
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
}
