<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $table = 'sb_amenity';

    // Relationships
    public function property() {
        return $this->hasManyThrough('App\Property', 'App\PropertyAmenity');
    }
}
