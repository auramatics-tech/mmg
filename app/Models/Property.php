<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    public $table = "properties";
    protected $fillable = [
        'created_by','form_type','status','is_featured','property_type','new_construction','home_and_land_package','authority','listing_expiry_date','price','show_price','alt_to_price','address','state','unit','street_no','street','postcode','suburb','address_display','key_number','key_location','alarm_code','internal_notes','headline','description','brochure_small_description','brochure_large_description','video_url','online_tour_1_url','online_tour_2_url','email_more_info_url'
    ];
    
    public function get_property_image(){
        return $this->hasOne(PropertyDocument::class, 'property_id','id')->where('type','property_images'); 
    }
    
    public function property_details(){
        return $this->hasOne(PropertyDetail::class, 'property_id','id'); 
    }
    
    public function get_property_all_image(){
        return $this->hasMany(PropertyDocument::class, 'property_id','id')->where('type','property_images'); 
    }

    public function property_links_listing(){
        return $this->hasOne(PropertyLinkListing::class, 'property_id','id'); 
    }
}
