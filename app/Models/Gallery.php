<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id', 'image'
    ];

    protected $hidden = [

    ];

    public function travel_packages(){
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }
    
}
