<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    use HasFactory;
    public $table = "property_details";
    protected $fillable = [
        'property_id','bedrooms','bathrooms','ensuites','toilets','garage_spaces','carport_spaces',
        'open_car_spaces','living_areas','house_sizes','house_size_units','land_size','land_size_units','energy_efficiency_rating',
        'nabers_rating','municipality','tags','sms_code','test_url','sample_test','utilities','rental','view_docs','reso_offer_link',
        'rental_allowances','outdoor','indoor','heating_cooling','eco_friendly','other_features','total_floor_area','office_area',
        'warehouse_area','total_car_spaces','parking_comments','tenancy','zoning'
    ];
}
