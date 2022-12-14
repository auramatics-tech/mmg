<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\InspectionBook;
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
use DB;
use GrahamCampbell\ResultType\Success;

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
    public function index(Request $request)
    {
        if (isset($request->page)) {
            $count = ($request->page - 1) * 10; //according to paginate value
        } else {
            $count = 0;
        }
        $properties = Property::where('created_by', Auth::id())
        ->when(isset($request->q), function ($query) use ($request) {
            $query->where(function ($query2)use ($request) {
                $query2->where('properties.form_type', 'LIKE', '%' . $request->q . '%')
                ->orWhere('properties.commercial_listing_type', 'LIKE','%' . $request->q . '%');
            });
        })->paginate(5);
        return view('seller.property.property_list', compact('properties','count'));
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
        } else {
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
        // echo "<pre>";
        // print_r($property_details);
        // die;
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
        //echo "<pre>";print_r($request->all());die;
        $data = $request->except("_token");
        //echo "<pre>";print_r($data);die;
        if ($request->form_type == 'residential') {
            $validate = Validator::make($request->all(), [
                'property_type' => ['required'],
                'home_and_land_package' => ['required'],
                'normal_price' => ['required'],
                'desired_price' => ['required'],
                // 'commercial_property_name' => ['required'],
                'commercial_rental_per_annum' => ['required'],
                'commercial_lease_expiry_date' => ['required'],
                'commercial_outgoings' => ['required'],
                'commercial_lease_term' => ['required'],
                'address' => ['required'],
                'address_display' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'authority' => ['required'],
                'suburb' => ['required'],
                'state' => ['required'],
                'postcode' => ['required'],

            ]);
        } elseif ($request->form_type == 'residential_rental') {
            $validate = Validator::make($request->all(), [
                'property_type' => ['required'],
                'address' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'suburb' => ['required'],
                'state' => ['required'],
                'postcode' => ['required'],
                'address_display' => ['required'],
            ]);
        } elseif ($request->form_type == 'residential_sale') {
            $validate = Validator::make($request->all(), [
                'property_type' => ['required'],
                'home_and_land_package' =>  ['required'],
                'address' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'suburb' => ['required'],
                'state' => ['required'],
                'postcode' => ['required'],
                'address_display' => ['required'],
            ]);
        } elseif ($request->form_type == 'commercial' && $request->commercial_listing_type == 'commercial_sale') {
            $validate = Validator::make($request->all(), [
                'commercial_property_type' => ['required'],
                'commercial_listing_type' => ['required'],
                'authority' => ['required'],
                // 'commercial_property_name' => ['required'],
                'address' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'suburb' => ['required'],
                'postcode' => ['required'],
                'address_display' => ['required'],

            ]);
        } elseif ($request->form_type == 'commercial' && $request->commercial_listing_type == 'commercial_lease') {

            $validate = Validator::make($request->all(), [
                'commercial_property_type' => ['required'],
                'commercial_listing_type' => ['required'],
                'commercial_rental_per_annum' => ['required'],
                'commercial_lease_expiry_date' => ['required'],
                'commercial_outgoings' => ['required'],
                'commercial_lease_term' => ['required'],
                // 'commercial_property_name' => ['required'],
                'address' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'suburb' => ['required'],
                'postcode' => ['required'],
                'address_display' => ['required'],
            ]);
        } elseif ($request->form_type == 'commercial' && $request->commercial_listing_type == 'commercial_sale_and_lease') {
            $validate = Validator::make($request->all(), [
                'commercial_property_type' => ['required'],
                'commercial_listing_type' => ['required'],
                'authority' => ['required'],
                // 'commercial_property_name' => ['required'],
                'commercial_rental_per_annum' => ['required'],
                'commercial_lease_expiry_date' => ['required'],
                'commercial_outgoings' => ['required'],
                'commercial_lease_term' => ['required'],
                'address' => ['required'],
                'street_no' => ['required'],
                'street' => ['required'],
                'suburb' => ['required'],
                'postcode' => ['required'],
                'address_display' => ['required'],
            ]);
        } elseif ($request->form_type == 'rural') {
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
        } elseif ($request->form_type == 'business') {
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

        if ($validate->fails()) {
            return Redirect::back()->with($data)->withErrors($validate);
        }
        $data = $request->except('_token');
        if(in_array(4,get_user_roles())){
            $data['is_approved'] = 1;
        }
        $data['created_by'] = Auth::id();
        $data['start_expiry_date'] = date('Y-m-d',strtotime($request->start_expiry_date));
        $data['end_expiry_date'] = date('Y-m-d',strtotime($request->end_expiry_date));
        $property = Property::updateOrCreate(['id' => $request->id], $data);
        $url = route('seller.property_details_form', $property->id) . "?listing_type=" . $data['form_type'];
        return redirect($url);
    }

    public function save_property_details(Request $request)
    {
        //echo "<pre>";print_r($request->all());die;
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
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $data = $request->except('_token');
        if(isset($request->inspection_day)){
            $data['inspection_day'] = json_encode($data['inspection_day']);
        }
       
        $inspection = Inspection::updateOrCreate(['property_id' => $request->property_id], $data);
        $property = Property::where('id',$request->property_id)->update(['is_complete'=>1]);
        if(in_array(4,get_user_roles())){
            return redirect()->route('admin.approved_properties')->with('success','Data updated successfully');
        }else{
            return redirect()->route('seller.property_list')->with('success','Data updated successfully');
        }
        
    }

    public function property_delete($id)
    {
        $property = Property::find($id);
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

    public function property_inspections(Request $request)
    {
        if (isset($request->page)) {
            $count = ($request->page - 1) * 10; //according to paginate value
        } else {
            $count = 0;
        }
        $my_properties = Property::where(['created_by' => Auth::id()])->pluck('id')->toArray();
        $property_inspections = InspectionBook::select('inspection_books.*',
        DB::raw("(select concat(COALESCE(users.first_name,''),' ',COALESCE(users.last_name,'')) from `users` where `users`.`id` = inspection_books.user_id) as user_data"),
        DB::raw("(select users.email from users where users.id = inspection_books.user_id order by `id` asc limit 1) as user_email"),
        )->when(isset($request->q), function ($query) use ($request) {
            $query->havingRaw("user_data LIKE '%" . $request->q . "%'");
        })->whereIn('property_id', $my_properties)->paginate(10);
        // echo"<pre>";print_r($property_inspections);die;
        return view('seller.property.property_inspections', compact('property_inspections','count'));
    }

    public function property_inspection_delete($id){
        $property_inspection = InspectionBook::find($id);
        $property_inspection->delete();
        return back()->with('success', 'Inspection deleted successfully.');

    }

    public function property_bid_listing(Request $request)
    {
        $my_properties = Property::where(['created_by' => Auth::id()])->pluck('id')->toArray();
        $buyer_name = Offer::select('offers.*',
        DB::raw("(select concat(COALESCE(users.first_name,''),' ',COALESCE(users.last_name,'')) from `users` where `users`.`id` = offers.user_id) as user_data"),
        DB::raw("(select properties.normal_price from `properties` where `properties`.`id` = offers.property_id) as normal_price"),
        DB::raw("(select properties.rental_per_month from `properties` where `properties`.`id` = offers.property_id) as rental_per_month"),
        DB::raw("(select properties.commercial_rental_per_annum from `properties` where `properties`.`id` = offers.property_id) as commercial_rental_per_annum"),
        DB::raw("(select properties.commercial_listing_type from `properties` where `properties`.`id` = offers.property_id) as commercial_listing_type"),
        DB::raw("(select properties.form_type from `properties` where `properties`.`id` = offers.property_id) as form_type"),
        DB::raw("(select properties.commercial_listing_type from `properties` where `properties`.`id` = offers.property_id) as commercial_listing_type"),
        )
        ->whereIn('property_id', $my_properties)
        ->when(isset($request->q), function ($query) use ($request) {
            $query->havingRaw("user_data LIKE '%" . $request->q . "%'");
        })->get();
        // echo"<pre>";print_r($buyer_name);die;
        return view('seller.property.bid_listing', compact('buyer_name'));
    }

    public function property_bid_delete($id){
        $property_bid = Offer::find($id);
        $property_bid-> delete();
        return back()->with('success', 'Offer deleted successfully.');

    }
}
