<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    public $table = "properties";
    protected $fillable = [
        'status','is_featured','property_type','new_construction','home_and_land_package','authority','listing_expiry_date','price','show_price','alt_to_price','address','state','unit','street_no','street','postcode','suburb','address_display','key_number','key_location','alarm_code','internal_notes','headline','description','brochure_small_description','brochure_large_description','video_url','online_tour_1_url','online_tour_2_url','email_more_info_url'
    ];
}
