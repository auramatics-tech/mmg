<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewImages extends Model
{
    use HasFactory;
    public $table = "review_images";
    protected $fillable = [
        'review_id','file_name','file_type'
    ];
    
    
}
