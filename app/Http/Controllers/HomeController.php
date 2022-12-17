<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Slider;
use App\Models\PropertyFeature;

class HomeController extends Controller
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
        $properties = Property::where('is_approved',1)->get();
        $property_features = PropertyFeature::all(); $sliderimages = Slider::all();
        $sliderimages = Slider::first();
        //   echo "<pre>";
        //     print_r( $sliderimages);
        //     die;
        return view('frontend.index',compact('properties','sliderimages','property_features'));
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function registration()
    {
        return view('frontend.registration');
    }

    public function contact_us()
    {
        return view('frontend.contact_us');
    }

    public function about_us()
    {
        return view('frontend.about_us');
    }
}
