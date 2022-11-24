<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyReview extends Model
{
    use HasFactory;
    public $table = "property_reviews";
    protected $fillable = [
        'property_id','user_id','name','email','comments','created_at','updated_at'
    ];
}

