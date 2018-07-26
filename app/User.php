<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phoneNumber', 'date_of_birth', 'password', 'user_type', 'date_of_birth', 'about', 'verified', 'status',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Renamed table
    protected $table = 'sb_users';
    
    /**
     * One to many properties
     */
    public function property(){
        return $this->hasMany('App\Property', 'id', 'user_id');
    }
}
