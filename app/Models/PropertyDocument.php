<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDocument extends Model
{
    use HasFactory;
    public $table = "property_documents";
    protected $fillable = [
        'property_id','type','document'
    ];
}
