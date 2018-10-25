<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title','year','imdb','type'
    ];

    public function convertToTypes(){
        $this->year = (int)$this->year;
        return $this;
    }
}
