<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyPhoneNumber extends Model
{
    protected $table = 'sb_verify_phone_numbers';


    /**
     * User has multiple phone_numbers
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
