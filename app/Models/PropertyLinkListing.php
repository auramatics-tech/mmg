<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyLinkListing extends Model
{
    use HasFactory;
    public $table = "property_links_listing";
    protected $fillable = [
        'property_id','headline','description','brochure_small_description','brochure_large_description','video_url','online_tour_1_url','online_tour_2_url','email_more_info_url'
    ];
}
