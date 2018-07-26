<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyAmenity extends Model
{
    // Table name
    protected $table = 'sb_property_amenity';

    // Primary keys
    // protected $primaryKey = ['property_id', 'amenity_id'];
    // protected $foreign

    public function property(){
        return $this->hasManyThrough(
            'App\Property', 
            'App\Amenity',
            'id',
            'id',
            'amenity_id',
            'id'
         );
    }

    public function amenity(){
        return $this->belongsTo('App\Amenity', 'amenity_id', 'id');
    }

    
}
