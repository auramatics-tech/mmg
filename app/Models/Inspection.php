<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    use HasFactory;
    public $table = "inspections";
    protected $fillable = [
        'inspection_date','inspection_day','start_time','end_time','inspection_type','user_id','property_id'
    ];
    
    public function property(){
        return $this->hasOne(Property::class, 'id','property_id'); 
    }
    
}
