<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'sb_category';

    // Relationships
    public function property() {
        return $this->hasMany('App\Property');
    }
}
