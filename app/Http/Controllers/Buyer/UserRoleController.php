<?php

namespace App\Http\Controllers\Buyer;
use App\Http\Controllers\Controller;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Auth;

class UserRoleController extends Controller
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
    public function become_seller()
    {
        $user_role = UserRole::where(['user_id'=>Auth::id(),'role'=>1])->first();
        if(!isset($user_role->id))
        {
            $user_role = new UserRole;
            $user_role->user_id = Auth::id();
            $user_role->role = 1;
            $user_role->save();
        }
        return back()->with('success','Congratulations your request for seller has been submitted sucessfully.');
    }

    public function become_crowd_seller()
    {
        $user_role = UserRole::where(['user_id'=>Auth::id(),'role'=>2])->first();
        if(!isset($user_role->id))
        {
            $user_role = new UserRole;
            $user_role->user_id = Auth::id();
            $user_role->role = 2;
            $user_role->save();
        }
        return back()->with('success','Congratulations your request for croud seller has been submitted sucessfully.');
    }

}
