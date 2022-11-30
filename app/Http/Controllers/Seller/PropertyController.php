<?php

namespace App\Http\Controllers\Seller;

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
use Validator;
use Redirect;

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
        $properties = Property::where('created_by', Auth::id())->paginate(5);
        return view('seller.property.property_list', compact('properties'));
    }

    public function add_property_form(Request $request)
    {

      
        $property_form = "listing_details";
        if ($request->listing_type == 'commercial') {
            $property_types = PropertyType::where('form_type', 'commercial')->get();
        } elseif ($request->listing_type == 'business') {
            $property_types = PropertyType::where('form_type', 'buisness')->get();
        } elseif ($request->listing_type == 'rural') {
            $property_types = PropertyType::where('form_type', 'rural')->get();
        }else {
            $property_types = PropertyType::where('form_type', 'residential')->get();
        }
        $property = '';
        if ($request->property_id) {
            $property = Property::find($request->property_id);
        }
        $crowd_sellers = UserRole::where('role', 2)->pluck('user_id')->toArray();
        $agents = User::whereIn('id', $crowd_sellers)->get();
        return view('seller.property.add_property', compact('property_form', 'property_types', 'agents', 'property'));
    }

    public function property_details_form($property_id = '', Request $request)
    {

        $property_form = "property_details";
        $property_details = PropertyDetail::where('property_id', $property_id)->first();
        if (!isset($property_details->id)) {
            $property_details = '';
        }
        $allowances = PropertyFeature::where('type', 'allowances')->get();
        $outdoor = PropertyFeature::where('type', 'outdoor')->get();
        $indoor = PropertyFeature::where('type', 'indoor')->get();
        $heating_cooling = PropertyFeature::where('type', 'heating_cooling')->get();
        $eco_friendly = PropertyFeature::where('type', 'eco_friendly')->get();
        return view('seller.property.add_property', compact('property_id', 'property_details', 'property_form', 'allowances', 'outdoor', 'indoor', 'heating_cooling', 'eco_friendly'));
    }

    public function property_image_form($property_id = '', Request $request)
    {
        $property_form = "image_docs";
        $property_link_listing = PropertyLinkListing::where('property_id', $property_id)->first();
        if (!isset($property_link_listing->id)) {
            $property_link_listing = '';
        }
        // echo"<pre>";print_r($floorplan_image_count);die;
        return view('seller.property.add_property', compact('property_id', 'property_form', 'property_link_listing'));
    }

    public function property_inspection_form($property_id = '', Request $request)
    {
        $property_form = "inspections";
        $inspection = Inspection::where('property_id', $property_id)->first();
        if (!isset($inspection->id)) {
            $inspection = '';
        }

        return view('seller.property.add_property', compact('property_id', 'property_form', 'inspection'));
    }


    public function save_listing_details(Request $request)
    {
        //  echo "<pre>";print_r($request->all());die;
        $data = $request->except("_token");
        //echo "<pre>";print_r($data);die;
        if ( $request->form_type == 'residential') {
            $validate = Validator::make($request->all(), [
                'status' => ['required'],
                'property_type' => ['required'],
                'home_and_land_package' => ['required'],
                'normal_price' => ['required'],
                'desired_price' => ['required'],
                'commercial_rental_per_annum' => ['required'],
                'commercial_psm_pa_min' => ['required'],
                'commercial_psm_pa_max' => ['required'],
                'commercial_lease_expiry_date' => ['required'],
                'commercial_outgoings' => ['required'],
                'commercial_lease_term' => ['required'],
                'commercial_property_name' => ['required'],
                'address' => ['required'],
                'address_display' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'authority' => ['required'],
                'suburb' => ['required'],
                'state' => ['required'],
                'postcode' => ['required'],
                
            ]);
        } elseif ($request->form_type == 'commercial' && $request->commercial_listing_type == 'commercial_sale' ) {
            $validate = Validator::make($request->all(), [
                'status' => ['required'], 
                 'commercial_listing_type' => ['required'],
                'authority' => ['required'],
                'normal_price' => ['required'],
                'commercial_property_name' => ['required'],
                'address' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'suburb' => ['required'],
                'postcode' => ['required'],
                'address_display' => ['required'], 
                
            ]);
        }
        elseif ($request->form_type == 'commercial' && $request->commercial_listing_type == 'commercial_lease' ) {

            $validate = Validator::make($request->all(), [
                'status' => ['required'], 
                'commercial_listing_type' => ['required'],
                'commercial_rental_per_annum' => ['required'],
                'commercial_psm_pa_min' => ['required'],
                'commercial_psm_pa_max' => ['required'],
                'commercial_lease_expiry_date' => ['required'],
                'commercial_outgoings' => ['required'],
                'commercial_lease_term' => ['required'],
                'commercial_property_name' => ['required'],
                'address' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'suburb' => ['required'],
                'postcode' => ['required'],
                'address_display' => ['required'], 
            ]);
        }
        elseif ($request->form_type == 'commercial' && $request->commercial_listing_type == 'commercial_sale_and_lease' ) {
            $validate = Validator::make($request->all(), [
                'status' => ['required'], 
                'commercial_listing_type' => ['required'],
               'authority' => ['required'],
               'normal_price' => ['required'],
               'commercial_property_name' => ['required'],
               'commercial_rental_per_annum' => ['required'],
                'commercial_psm_pa_min' => ['required'],
                'commercial_psm_pa_max' => ['required'],
                'commercial_lease_expiry_date' => ['required'],
                'commercial_outgoings' => ['required'],
                'commercial_lease_term' => ['required'],
                'commercial_property_name' => ['required'],
                'address' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'suburb' => ['required'],
                'postcode' => ['required'],
                'address_display' => ['required'], 
            ]);
        }
        elseif ($request->form_type == 'rural') {
            $validate = Validator::make($request->all(), [
                'status' => ['required'],
                'property_type' => ['required'],
                'authority' => ['required'],
                'normal_price' => ['required'],
                'desired_price' => ['required'],
                'address' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'suburb' => ['required'],
                'state' => ['required'],
                'postcode' => ['required'],
                'address_display' => ['required'], 
             
            ]);
        }
        
        elseif ($request->form_type == 'business') {
            $validate = Validator::make($request->all(), [
                'status' => ['required'],
                'normal_price' => ['required'],
                'desired_price' => ['required'],
                'address' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'suburb' => ['required'],
                'state' => ['required'],
                'postcode' => ['required'],
                'address_display' => ['required'], 
                 
            ]);
        }
        elseif ($request->form_type == 'residential_rental') {
            $validate = Validator::make($request->all(), [
                'status' => ['required'],
                'property_type' => ['required'],
                'address' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'suburb' => ['required'],
                'postcode' => ['required'],
                'address_display' => ['required'], 

                
            ]);
        }
     
        if ($validate->fails()) {
            return Redirect::back()->with($data)->withErrors($validate);
        }
        $data = $request->except('_token');
        $data['created_by'] = Auth::id();
        $property = Property::updateOrCreate(['id' => $request->id], $data);
        return redirect()->route('seller.property_details_form', $property->id);
    }

    public function save_property_details(Request $request)
    {
        //echo "<pre>";print_r($request->all());die;
        $data = $request->except('_token');
        $validate = Validator::make($request->all(), [
            'bedrooms' => ['required'],
            'bathrooms' => ['required'],
            'ensuites' => ['required'],
            'toilets' => ['required'],
            'garage_spaces' => ['required'],
            'carport_spaces' => ['required'],
            'open_car_spaces' => ['required'],
            'living_areas' => ['required'],
            'house_sizes' => ['required'],
            'land_size' => ['required'],
            'other_features' => ['required'],

        ]);
    
    if ($validate->fails()) {
        return Redirect::back()->with($data)->withErrors($validate);
    }
        $data = $request->except("_token");
        $data['tags'] = (isset($data['tags']) && count($data['tags'])) ? json_encode($data['tags']) : '';
        $data['rental_allowances'] = (isset($data['rental_allowances']) && count($data['rental_allowances'])) ? json_encode($data['rental_allowances']) : '';
        $data['outdoor'] = (isset($data['outdoor']) && count($data['outdoor'])) ? json_encode($data['outdoor']) : '';
        $data['indoor'] = (isset($data['indoor']) && count($data['indoor'])) ? json_encode($data['indoor']) : '';
        $data['heating_cooling'] = (isset($data['heating_cooling']) && count($data['heating_cooling'])) ? json_encode($data['heating_cooling']) : '';
        $data['eco_friendly'] = (isset($data['eco_friendly']) && count($data['eco_friendly'])) ? json_encode($data['eco_friendly']) : '';
        $property_details = PropertyDetail::updateOrCreate(['property_id' => $request->property_id], $data);
        return redirect()->route('seller.property_image_form', $property_details->property_id);
    }

    public function save_property_images(Request $request)
    {
        $data = $request->except('_token');
        $validate = Validator::make($request->all(), [
            'headline' => ['required'],
            'description' => ['required'],
        ]);
        if ($validate->fails()) {
            return Redirect::back()->with($data)->withErrors($validate);
        }
        $data = $request->except('_token');
        if (isset($data['upload_images']) && count($data['upload_images'])) {
            foreach ($request->upload_images as $key => $img) {
                $property_documents = new PropertyDocument;
                $property_documents->type = 'property_images';
                $property_documents->property_id = $data['property_id'];
                $file = $img;
                $imageName = time() . $key . '.' . $file->extension();
                $file->move(storage_path('app/public/property_images'), $imageName);
                $property_documents->document = $imageName;
                $property_documents->save();
            }
        }

        if (isset($data['upload_floorplans']) && count($data['upload_floorplans'])) {
            foreach ($request->upload_floorplans as $key => $img) {
                $property_documents = new PropertyDocument;
                $property_documents->type = 'property_floorplans';
                $property_documents->property_id = $data['property_id'];
                $file = $img;
                $imageName = time() . $key . '.' . $file->extension();
                $file->move(storage_path('app/public/property_floorplans'), $imageName);
                $property_documents->document = $imageName;
                $property_documents->save();
            }
        }

        if (isset($data['upload_documents']) && count($data['upload_documents'])) {
            foreach ($request->upload_documents as $key => $img) {
                $property_documents = new PropertyDocument;
                $property_documents->type = 'property_documents';
                $property_documents->property_id = $data['property_id'];
                $file = $img;
                $imageName = time() . $key . '.' . $file->extension();
                $file->move(storage_path('app/public/property_documents'), $imageName);
                $property_documents->document = $imageName;
                $property_documents->save();
            }
        }
        $property_link_listing = PropertyLinkListing::updateOrCreate(['property_id' => $request->property_id], $data);
        $property_image_count = PropertyDocument::where('type', 'property_images')->where(['property_id' => $request->property_id])->count();
        if ($property_image_count < 2) {
            $msg = 'Please upload ' . (2 - $property_image_count) . ' more files ';
            return back()->with('error', $msg);
        }
        return redirect()->route('seller.property_inspection_form', $property_link_listing->property_id);
    }

    public function save_inspections(Request $request)
    {
        $data = $request->except('_token');
        $inspection = Inspection::updateOrCreate(['property_id' => $request->property_id], $data);
        return redirect()->route('seller.property_list');
    }

    public function property_delete($id)
    {
        $property = Property::find($id)->first();
        $property->delete();
        PropertyDetail::where('property_id', $id)->delete();
        PropertyDocument::where('property_id', $id)->delete();
        PropertyLinkListing::where('property_id', $id)->delete();
        Inspection::where('property_id', $id)->delete();
        Offer::where('property_id', $id)->delete();
        return back()->with('success', 'Property deleted successfully.');
    }

    public function property_offers()
    {
        $my_properties = Property::where(['created_by' => Auth::id()])->pluck('id')->toArray();
        $property_offers = Offer::whereIn('property_id', $my_properties)->paginate(4);
        return view('seller.property.property_offers', compact('property_offers'));
    }

    public function property_inspections()
    {
        $my_properties = Property::where(['created_by' => Auth::id()])->pluck('id')->toArray();
        $property_inspections = BookInspection::whereIn('property_id', $my_properties)->paginate(4);
        return view('seller.property.property_inspections', compact('property_inspections'));
    }

    public function property_bid_listing()
    {
        $my_properties = Property::where(['created_by' => Auth::id()])->pluck('id')->toArray();
        $buyer_name = Offer::whereIn('property_id', $my_properties)->get();
        return view('seller.property.bid_listing', compact('buyer_name'));
    }
}
