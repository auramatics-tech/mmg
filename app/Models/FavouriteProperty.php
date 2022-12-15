<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteProperty extends Model
{
    use HasFactory;
    public $table = "favourite_properties";
    protected $fillable = [
        'user_id','property_id'
    ];

    public function property_image(){
        return $this->hasOne(Property::class, 'id','property_id'); 
    }
}
