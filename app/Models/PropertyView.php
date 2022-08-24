<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyView extends Model
{
    use HasFactory;
    public $table = "property_views";
    protected $fillable = [
        'property_id','user_id'
    ];
}
