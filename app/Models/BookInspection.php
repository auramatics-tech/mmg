<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookInspection extends Model
{
    use HasFactory;
    public $table = "book_inspection";
    protected $fillable = [
        'user_id','property_id'
    ];
    
    public function property(){
        return $this->hasOne(Property::class, 'id','property_id'); 
    }
    
    public function inspection(){
        return $this->hasOne(Inspection::class, 'property_id','property_id'); 
    }
    
    public function user(){
        return $this->hasOne(User::class, 'id','user_id'); 
    }
}
