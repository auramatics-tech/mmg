<?php

namespace App\Http\Controllers\Buyer;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\BookInspection;
use App\Models\Property;
use App\Models\UserRole;
use App\Models\PropertyView;
use App\Models\User;
use App\Models\FavouriteProperty;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
    public function index()
    {
        $admin['total_offers'] = Offer::count();
        $admin['total_properties'] = Property::count();
        $admin['total_views'] = PropertyView::count();
        $admin['total_inspections'] = BookInspection::count();
        $admin['total_buyers'] = User::count();
        $admin['total_sellers'] = UserRole::where('role',1)->count();
        $admin['total_crowd_sellers'] = UserRole::where('role',2)->count();

        $seller['my_properties_ids'] = Property::where('created_by',Auth::id())->pluck('id')->toArray();
        $seller['my_property_views'] = PropertyView::whereIn('property_id',$seller['my_properties_ids'])->count();
        $seller['my_property_offers'] = Offer::whereIn('property_id',$seller['my_properties_ids'])->count();
        $seller['my_property_inspections'] = BookInspection::where('property_id',$seller['my_properties_ids'])->count();

        $crowd_seller['my_refer_offers'] = Offer::where('reference_id',Auth::id())->count();

        $buyer['offers'] = Offer::where('user_id',Auth::id())->count();
        $buyer['inspection'] = BookInspection::where('user_id',Auth::id())->count();
        $buyer['fav_properties'] = FavouriteProperty::where('user_id',Auth::id())->count();
        $buyer['total_properties'] = Property::where('is_approved',1)->count();
        return view('buyer.dashboard',compact('admin','seller','buyer','crowd_seller'));
    }

}
