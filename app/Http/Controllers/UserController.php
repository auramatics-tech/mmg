<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class UserController extends Controller
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
     * 
     */
    
     public function update_profile(Request $request)
    {
       
        $user = Auth::user();
        // echo "<pre>";print_r( $request->all());die;
        if(isset($request->first_name)){
            $user->first_name = $request->first_name;
        }
        if(isset($request->last_name)){
            $user->last_name = $request->last_name;
        }
        if(isset($request->account_status)){
            $user->account_status = $request->account_status;
        }else{
            $user->account_status = 0;
        }
        if(isset($request->notification_flag)){
            $user->notification_flag = $request->notification_flag;
        }else{
            $user->notification_flag = 0;
        }
        if(isset($request->password)){
            $user->password = Hash::make($request->password);
        }
        if(isset($request->profile)){
            $file = $request->file('profile');
            $imageName = time() . '.' . $file->extension();
            $file->move(public_path('user_profile/'), $imageName);
            $user->profile_pic = $imageName;
        }       
        $user->save();
       
        return back()->with('success','Data updated successfully');
    }

    public function user_profile()
    {
        return view('frontend.users.user_profile');
    }
  
}
