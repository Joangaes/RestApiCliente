<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'date','rating','reviewer','text'
    ];

    public function convertToTypes(){
        $this->rating = (int)$this->rating;
        return $this;
    }
}
