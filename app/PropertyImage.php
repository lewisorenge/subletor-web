<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    protected $table  = 'sb_property_image';

    public function property() {
        return $this->belongsTo('App\Property', 'property_id', 'id');
    }
}
