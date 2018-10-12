<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counts extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [  
        'duroodCount', 'party_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}