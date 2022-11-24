<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    public $table = "properties";
    protected $fillable = [
        'created_by','is_approved','form_type','business_name',
        'status','is_featured','property_type',
        'new_construction','home_and_land_package',
        'authority','listing_expiry_date','normal_price',
        'desired_price','show_price','alt_to_price',
        'address','state','unit','street_no','street',
        'postcode','suburb','lat','lng','address_display','key_number','terms','commercial_outgoings','commercial_lease_term','commercial_property_name',
        'key_location','alarm_code','internal_notes','headline','rental_per_week','rental_per_month','rental_security_bond','rental_date_available',
        'description','brochure_small_description','brochure_large_description','commercial_roi','commercial_property_type','commercial_property_type2','commercial_property_type3','commercial_rental_per_annum','commercial_lease_expiry_date','commercial_psm_pa_max','commercial_psm_pa_min',
        'video_url','online_tour_1_url','online_tour_2_url','email_more_info_url','about_home','about_location','about_improvements','commercial_listing_type'
    ];
    
    public function get_property_image(){
        return $this->hasOne(PropertyDocument::class, 'property_id','id')->where('type','property_images')->orderBy('id','desc'); 
    }
    public function get_property_floor_plan(){
        return $this->hasOne(PropertyDocument::class, 'property_id','id')->where('type','property_floorplans')->orderBy('id','desc'); 
    }
    
    public function property_details(){
        return $this->hasOne(PropertyDetail::class, 'property_id','id'); 
    }
    
    public function get_property_all_image(){
        return $this->hasMany(PropertyDocument::class, 'property_id','id')->where('type','property_images')->orderBy('id','desc'); 
    }

    public function property_links_listing(){
        return $this->hasOne(PropertyLinkListing::class, 'property_id','id'); 
    }
    
    public function property_inspection(){
        return $this->hasOne(Inspection::class, 'property_id','id'); 
    }
    public function property_name(){
        return $this->hasOne(User::class, 'id','created_by'); 
    }
}
