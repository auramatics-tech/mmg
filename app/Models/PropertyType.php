<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;
    public $table = "property_types";
    protected $fillable = [
        'value','form_type'
    ];
}
