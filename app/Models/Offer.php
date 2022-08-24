<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    public $table = "offers";
    protected $fillable = [
        'user_id','property_id','reference_id','offer_price','note','visible_to_vendor'
    ];

    public function property(){
        return $this->hasOne(Property::class, 'id','property_id'); 
    }

    public function user(){
        return $this->hasOne(User::class, 'id','user_id'); 
    }
}
