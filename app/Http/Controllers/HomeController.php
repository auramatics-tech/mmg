<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Slider;
use App\Models\ContactUs;
use App\Models\PropertyFeature;
use Mail;

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

    public function save_contact_us(Request $request){
        // echo"<pre>";print_r($request->all());die;
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'message' => ['required'],
        ]);
        $contact_us = New ContactUs();
        $contact_us->name = $request->name;
        $contact_us->email = $request->email;
        $contact_us->phone = $request->phone;
        $contact_us->message = $request->message;
        $contact_us->service_type = $request->service_type;
        $contact_us->save();
        Mail::send('frontend.contact_us_mail', compact('request'), function ($m) use ($request) {
            $m->to($request->email)
               ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
               ->subject(__('Contact Form Submit Successfully'));
       });
       Mail::send('frontend.contact_us_mail', compact('request'), function ($m) use ($request) {
           $m->to(env('MAIL_TO_ADMIN'))
              ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
              ->subject(__(' New Contact Submitted'));
           });
        return redirect()->back()->with('success', 'Form Submitted successfully, will get back to you sortly!');
    }

    public function about_us()
    {
        return view('frontend.about_us');
    }
}
