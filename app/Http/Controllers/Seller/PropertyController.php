<?php

namespace App\Http\Controllers\Seller;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\PropertyFeature;
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
    public function index()
    {
        $properties = Property::where('created_by',Auth::id())->get();
        return view('seller.property.property_list',compact('properties'));
    }

    public function add_property_form(Request $request)
    {
        $property_form = "listing_details";
        if($request->listing_type == 'commercial')
        {
            $property_types = PropertyType::where('form_type','commercial')->get();
        }
        elseif($request->listing_type == 'business')
        {
            $property_types = PropertyType::where('form_type','buisness')->get();
        }
        elseif($request->listing_type == 'rural')
        {
            $property_types = PropertyType::where('form_type','rural')->get();
        }
        else
        {
            $property_types = PropertyType::where('form_type','residential')->get();
        }
        return view('seller.property.add_property',compact('property_form','property_types'));
    }

    public function property_details_form($id='',Request $request)
    {
        $property_form = "property_details";
        $allowances = PropertyFeature::where('type','allowances')->get();
        $outdoor = PropertyFeature::where('type','outdoor')->get();
        $indoor = PropertyFeature::where('type','indoor')->get();
        $heating_cooling = PropertyFeature::where('type','heating_cooling')->get();
        $eco_friendly = PropertyFeature::where('type','eco_friendly')->get();
        return view('seller.property.add_property',compact('property_form','allowances','outdoor','indoor','heating_cooling','eco_friendly'));
    }

    public function property_image_form($id='',Request $request)
    {
        $property_form = "image_docs";
        return view('seller.property.add_property',compact('property_form'));
    }

    public function property_inspection_form($id='',Request $request)
    {
        $property_form = "inspections";
        return view('seller.property.add_property',compact('property_form'));
    }

    public function save_listing_details(Request $request)
    {
        $data = $request->except('_token');
        $data['created_by'] = Auth::id();
        $property = Property::updateOrCreate(['id'=>$request->id],$data);
        return redirect()->route('property_details_form',$property->id);
    }
}
