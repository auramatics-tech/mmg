<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Slider;
use Auth;

class SliderController extends Controller
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


    public function upload_slider_images(Request $request)
    {
        // echo "<pre>";
        // print_r( $request->all());
        // die;
        $fileModal = Slider::Find(1);
        if ($request->hasfile('imageFile')) {
            $file = $request->file('imageFile');
            $name = 'slider_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/sliders'), $name);
            $fileModal->file_name = $name;
            $fileModal->save();
        }
        return back()->with('success', 'File has successfully uploaded!');
    }
    public function createForm()
    {
        return view('image-upload');
    }


    public function image_slider_list(Request $request)
    {
        $files = Slider::where('active', 1)->orderBy('sort', 'ASC')->get();
        return view('admin.image_slider_list', compact('files'));
    }
}
