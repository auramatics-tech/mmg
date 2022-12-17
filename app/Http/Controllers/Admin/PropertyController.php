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
    public function draft_properties()
    {
        $properties = Property::where('is_approved',0)->get();
        return view('admin.draft_properties',compact('properties'));
    }

    public function approved_properties()
    {
        $properties = Property::where('is_approved',1)->get();
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

    public function appraisal()
    {
        $appraisal_data = Appraisal::all();
        return view('admin.appraisal_listing',compact('appraisal_data'));
    }
}
