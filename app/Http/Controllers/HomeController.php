<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function seller_login()
    {
        return view('frontend.seller_login');
    }

    public function seller_registration()
    {
        return view('frontend.seller_registration');
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
