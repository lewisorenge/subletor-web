<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = "sb_property";

    protected $primaryKey = 'id';

    // Relationships
    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function propertyImage() {
        return $this->hasMany('App\PropertyImage', 'property_id', 'id');
    }

    public function amenity() {
        return $this->hasMany('App\Amenity');
    }

    /**
     * Property has many reviews
     */
    public function propertyReviews() {
        return $this->hasMany('App\PropertyReviews', 'property_id', 'id');
    }
}