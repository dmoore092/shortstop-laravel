<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //protected $table = 'blah';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'profile_image', 'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
