<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goashas extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
         'name', 'fatherName', 'postalAddress', 'union_council', 'Tehsil', 'city', 'district', 'provience', 'country', 'education', 'profession', 'dob', 'nic', 'email', 'phoneRes', 'phoneOff', 'phoneCell', 'holyQuran', 'ashra','party_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}