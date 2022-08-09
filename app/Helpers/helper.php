<?php

use Illuminate\Support\Facades\Auth;

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
