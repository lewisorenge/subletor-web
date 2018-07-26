<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    // Table name
    protected $table = 'sb_phone_numbers';

    /**
     * Many to one relation whith user
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
