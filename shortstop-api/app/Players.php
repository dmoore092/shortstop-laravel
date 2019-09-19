<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    //protected $table = 'blah';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'profile_image',
    ];
}
