<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    protected $fillable = [
        'nominations','text','wins'
    ];
}
