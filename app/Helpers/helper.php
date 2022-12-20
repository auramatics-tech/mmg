<?php

use App\Models\FavouriteProperty;
use Illuminate\Support\Facades\Auth;
use App\Models\UserRole;
use App\Models\Property;

if (!function_exists('debug')) {

    function debug($array = array())
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}

if (!function_exists('number_dropdown')) {

    function number_dropdown($select='')
    {
        $options = "";
        for($i=0;$i<=50;$i++)
        {
            $selected = ($select==$i)?'selected':'';
            $options .= "<option value='".$i."' $selected >".$i."</option>";
        }
        return $options;
    }
    
}


if (!function_exists('get_user_roles')) {
    function get_user_roles(){
        $roles =  UserRole::where(['user_id'=>Auth::id(),'is_approved'=>1])->orderby('id','desc')->pluck('role')->toArray(); 
        return $roles;
    }
}


if (!function_exists('check_favourite_property')) {
    function check_favourite_property($property_id){
        if(Auth::check())
        {
            $property =  FavouriteProperty::where(['user_id'=>Auth::id(),'property_id'=>$property_id])->first(); 
            if(isset($property->id))
            {
                return true;
            }
        }
        return false;
    }
}

if (!function_exists('get_property_type')) {
    function get_property_type($property_id){
        $property =  Property::Find($property_id); 
        return $property;
    }
}