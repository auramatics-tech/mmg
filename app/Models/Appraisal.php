<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appraisal extends Model
{
    use HasFactory;
    public $table = "appraisals";
    protected $fillable = [
        'name',
        'address',
        'phone_no',
        'email',
        'year',
        'property_worth',
        'agent',
        'date',
        'prefered_method',
        'hear_about'
    ];
    public function get_croud_seller_name(){
        return $this->hasOne(User::class, 'id','user_id'); 
    }
}
