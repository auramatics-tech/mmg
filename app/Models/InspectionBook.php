<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionBook extends Model
{
    use HasFactory;
    public $table = "inspection_books";
    protected $fillable = [
        'property_id','inspection_date','user_id','inspection_time','created_at','updated_at'
    ];
    public function property(){
        return $this->hasOne(Property::class, 'id','property_id'); 
    }
}
