<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imdb extends Model
{
    protected $fillable = [
        'rating','votes'
    ];
}
