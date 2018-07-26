<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyReviews extends Model
{
    protected $table = 'sb_property_review';

    // Relationships
    public function booking(){
        return $this->hasOne('App\Booking');
    }
}
