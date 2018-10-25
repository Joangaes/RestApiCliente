<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tomato extends Model
{
    protected $fillable = [
        'consensus','fresh','image','meter','rating','reviews','userMeter','userRating','userReviews'
    ];
}
