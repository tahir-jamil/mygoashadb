<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'username', 'name', 'email', 'password', 'fatherName', 'nic', 'dob', 'city', 'district', 'provience', 'country', 'phoneRes', 'phoneOff', 'phoneCell', 'education', 'profession', 'postalAddress', 'holyQuran'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}

